<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 'on');
include 'database.php';
include 'password.php';

$httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

switch($httpMethod) {
    case "OPTIONS":
        // Allows anyone to hit your API, not just this c9 domain
        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Max-Age: 3600");
        exit();
    
    case "GET":
          
        $servername = "localhost";
        $dbPort = 3306;
        
        $database = "race";
        
        $username = getenv('C9_USER');
        $password = getPassword();

        // Establish the connection and then alter how we are tracking errors (look those keywords up)
        $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
        
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $whereSql = "
        SELECT * 
        FROM races
        WHERE status_id='1';
        ";
        //db will only display things with status code of 1 meaning they are active events
        //a cancelled event *should* have a code of 2, and a past even *should* have a code of 0
        
        // The prepare caches the SQL statement for N number of parameters imploded above
        $whereStmt = $dbConn->prepare($whereSql);
        
        // Just have to pop in the associative array that comes from json_decode
        $whereStmt->execute($postedAssocArray);
        
        // Returns associative array instead of a cursor
        $sqlQueryResultsAssocArray = $whereStmt->fetchAll(PDO::FETCH_ASSOC);
        // Allow any client to access
        header("Access-Control-Allow-Origin: *");
        echo json_encode($sqlQueryResultsAssocArray);
        break;
        
    case 'POST':
          
        // Get the body json that was sent
        $rawJsonString = file_get_contents("php://input");
        
        // Make it a associative array (by making second param = true)
        $postedJsonData = json_decode($rawJsonString, true);
        var_dump($postedJsonData);
        // initiating DB connection
        $servername = getenv('IP');
        $dbPort = 3306;
        
        // Which database (the name of the database in phpMyAdmin)?
        $database = "race";
        
        $username = getenv('C9_USER');
        $password = getPassword();
        
        $dbConn = getDatabaseConnection($servername, $dbPort, $database, $username, $password);
        
        
        $whereSql = "
        INSERT INTO `races`(`raceid`, `date`, `time`, `password`, `location`, `status_id`) VALUES (:raceId, :date, :time, :password, :location, :status_id)
        ";
        
        // The prepare caches the SQL statement for N number of parameters imploded above
        $whereStmt = $dbConn->prepare($whereSql);
        
        // Just have to pop in the associative array that comes from json_decode
        $whereStmt->execute($postedJsonData);
        
        // Let the client know the format of the data being returned
        header("Content-Type: application/json");
        // Allow any client to access
        header("Access-Control-Allow-Origin: *");
        
        // Make some status data to send back down in an associative array
        
        // Sending back down as JSON
        echo json_encode($postedJsonData);
    
        break;
    case 'PUT':
        header("Access-Control-Allow-Origin: *");
        http_response_code(401);
        echo "Not Supported";
        break;
    case 'DELETE':
        header("Access-Control-Allow-Origin: *");
        http_response_code(401);
        break;
    }
?>