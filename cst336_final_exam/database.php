<?php
// connect to our mysql database server
function getDatabaseConnection($host, $port, $dbname, $username, $password) {
    // if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false) {
    //     // running on cloud9
    //     $host = "localhost";
    //     $username = "tyost";
    //     $password = "cst336"; // best practice: define this in a separte file
    //     $dbname = "race"; 
    // } else {
    //     // running on Heroku
    //     $host = "";
    //     $username = "";
    //     $password = ""; 
    //     $dbname = ""; 
    // }
    
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}
// temporary test code
//$dbConn = getDatabaseConnection(); 
?>