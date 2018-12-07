<?php
    include 'database.php';
    $dbConn = getDatabaseConnection();
    
    function getPets() {
        global $dbConn;
        $sql = "SELECT * FROM `pets` ORDER BY id";
        $statement = $dbConn->prepare($sql); 
        
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        var_dump($records);
    }
    
?>