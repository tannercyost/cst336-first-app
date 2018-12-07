<?php 
    $conn = mysqli_connect("localhost", "tyost", "cst336", "pets");
    $result = mysqli_query($conn, "SELECT * FROM `pets`");
    
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
    //echo $result;
    
?>