<?php
    session_start();
    include 'database.php';
    $dbConn = getDatabaseConnection(); 
    $sql = "SELECT * FROM q_quotes ORDER BY RAND() LIMIT 1"; 
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll();
    if (isset($_SESSION['data'])) {
      createQuote($_SESSION['data']['quote'], $_SESSION['data']['author']);
      session_destroy();
    }
    function createQuote($quote, $author) {
      $dbConn = getDatabaseConnection(); 
      $sql = "INSERT INTO `q_quotes`(`quoteId`, `quote`, `author`, `num_likes`) VALUES (NULL, '$quote', '$author', 0)"; 
      $statement = $dbConn -> prepare($sql); 
      $statement -> execute(); 
    }
    

?>

<!DOCTYPE html>
<html>
  <head>
    <title>CST 336 Midterm</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1></h1>
    <h2></h2>
    
    <?php
    foreach ($records as $record) {
      echo "<div class='quote-div'>";
      echo '<h2 class="quote">' . $records[0]["quote"] . '</h2>'; 
      echo '<h2 class="author"> -- ' . $records[0]["author"] . '</h2>'; 
      echo '</div>';
      echo '<br />';
    }
    ?>
    <a href="./create.php">Create</a>
    
    
  </body>
</html>