<?php
include 'database.php';

function firstProblem() {
    
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from mp_town WHERE population > 50000 AND population < 80000;";  

    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
        echo $record['town_name'];
        echo " ";
        echo $record['population'];
        echo "<br />";
    }
    echo "<br />";
} 

function secondProblem() {
    
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from mp_town ORDER BY population DESC;";  

    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
        echo $record['town_name'];
        echo " ";
        echo $record['population'];
        echo "<br />";
    }
    echo "<br />";
} 

function thirdProblem() {
    
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from mp_town ORDER BY population LIMIT 3;";  

    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
        echo $record['town_name'];
        echo $record['population'];
        echo "<br />";
    }
    echo "<br />";
} 

function fourthProblem() {
    
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from mp_county WHERE county_name LIKE 'S%';";  
    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
        echo $record['county_name'];
        echo "<br />";
    }
    echo "<br />";
} 

?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>

  </head>
  <body>
    <?php
        echo "First problem: <br />";
        firstProblem();
        echo "Second problem: <br />";
        secondProblem();
        echo "Third problem: <br />";
        thirdProblem();
        echo "Fourth problem: <br />";
        fourthProblem();
    ?>
  </body>
</html>