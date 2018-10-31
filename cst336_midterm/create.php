<?php
    session_start();
    function validateData() {
        $value = TRUE;
        
        if (!isset($_POST['quote']) || !isset($_POST['author'])) {
            $value = FALSE;
        }
        
        if (empty($_POST['quote']) && isset($_POST['quote'])) {
            echo "<h3 class='error'>Quote cannot be empty!</h1>";
            $value = FALSE;
        }
        
        if (empty($_POST['author']) && isset($_POST['author'])) {
            echo "<h3 class='error'>Author cannot be empty!</h1>";
            $value = FALSE;
        }
        if ($value) {
            $_SESSION['data'] = $_POST; 
        }
        return $value;
    }
    
    if (validateData()) {
	    header('Location: ./cst336_midterm.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Create a Quote</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <h1>Create a Quote</h1>
    <h2>Fill out the form to create a quote.</h2>
    
    <form method="post" action="create.php">
        Quote: <input type="text" name="quote"></input> <br/>
        Author: <input type="text" name="author"></input> <br/>

        <input type="submit"></input>
    </form>
    
    <a href="./cst336_midterm.php">Go Back to Home</a>
    
    
  </body>
</html>