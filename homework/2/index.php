<?php
    session_start();
    include 'php/functions.php';
    $_SESSION['guess'] = $_POST['guess'];
    $numOfDice = 3;
    $diceRolls = generateRolls($numOfDice);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dice Guessing Game</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>Dice Guessing Game</h1>
        <?php
            echo '<div class="imgRow">';
            for ($i = 1; $i <= 6; $i++) {
                $randPic=rand(1,6);
                echo "<img class='dice' src='img/$randPic.png'>";
            }
            echo '</div>';
        ?>
        <h3>You will be guessing 3 rolls of a 6 sided dice.</h3>
        <p>Enter your guesses and click submit.</p>
        

        <br />
        

        
        <form method="post" action="">
        <input class="text" type="text" name="guess[]" value="<?php echo $_SESSION['guess'][0];?>">
        <br />
        <input class="text" type="text" name="guess[]" value="<?php echo $_SESSION['guess'][1];?>">
        <br />
        <input class="text" type="text" name="guess[]" value="<?php echo $_SESSION['guess'][2];?>">
        <br />
        <input class="button" type="submit">
        </form>
        

        <?php
        $correctGuess = array();
            // var_dump($_POST['guess']);
            // echo "<br />";
            // var_dump($diceRolls);
            // echo "<br />";
        
            if(!empty($_POST['guess'])) {
                foreach ($_POST['guess'] as $item) {
                    if (in_array((int) $item, $diceRolls)) {
                        array_push($correctGuess, $item);
                    }
                }
            }
            

        echo '<div class="winners">';
            if(!empty($correctGuess)) {
                if(count($correctGuess)==3) {
                    echo '<span class="entry">';
                    echo 'Congratulations, you guessed all 3 dice!';
                    echo '</span>';
                }
                else {
                    foreach($correctGuess as $item) {
                        echo '<span class="entry">';
                        echo "$item was one of the dice.";
                        echo '</span>';
                        echo '<br />';
                    }  
                }

            }
            else {
                echo '<span class="entry">';
                echo 'Sorry, none of your entries were the dice.<br />Modify your guesses to start again or refresh to use same guesses.';
                echo '</span>';
                echo '<br />';
            }


        echo "</div>";
        ?>
       
        
        
    </body>
</html>