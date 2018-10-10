<?php

//PLAN:
//1 generate a random number --> store it in session
//2 need a form for user input
//3 form validation logic
//4 store history in the session
//5 clear the session when the user clicks "start over"

session_start();

if(isset($_POST['destroy'])) {
    session_destroy();
    session_start();
}

if (!isset($_SESSION['randomVal'])) {
    $_SESSION['randomVal'] = rand(1,100);
}

if (!isset($_POST['submitGuess']))
{
    $_SESSION['guesses'] = array();
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Some Pretty Cool Stuff</title>
    </head>
    <body>
        Random number: <?php echo $_SESSION['randomVal'] ?>
        
        <form method="post">
            <input type="text" name="guesses"></input>
            <input type="submit" name="submitGuess" value="Submit Guess"></input>
        </form>
        <!--<?php array_push($_SESSION['guesses'], $_POST['guesses']) ?>-->
        <!--<?php print_r($_SESSION['guesses']) ?>-->
        <?php 
            foreach($_SESSION['guesses'] as $item) {
                echo "$item<br />";
            }
        ?>
        <?php //print_r($_POST['submitGuess']) ?>

        <form method="post">
            <input type="submit" name="destroy" value="Start Over"></input>
        </form>
    </body>
</html>