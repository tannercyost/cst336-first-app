<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }        
    </style>
</head>

<body>

    <h1> Rock, Paper, Scissors </h1>

    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    
    <?php
    
            function winner($ran1, $ran2) {
        
            if ($ran1 == 0 && $ran2 == 1) //rock vs paper, paper wins
                return 1;
            
            if($ran1 == 0 && $ran2 == 2) //rock vs scissors, rock wins
                return 0;
                
            if($ran1 == 1 && $ran2 == 2) //scissors vs paper, scissors wins
                return 2;
        
        
            }

    for ($i = 0; $i < 3; $i++) {
        $ran1 = rand(0,2);
        $ran2 = rand(0,2);
        while ($ran1 == $ran2) {
            $ran2 = rand(0,2);
        }
        $play1;
        $play2;
        

        
        
        echo '<div class="row">';

        if ($ran1 == 0) {
            // play1 rock;
            if (winner($ran1, $ran2) == 0 )
                echo '<div class="col, matchWinner"><img src="rps/rock.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/rock.png" alt="rock" width="150"></div>';

                
        }
        if ($ran1 == 1) {
            //paper;
            if (winner($ran1, $ran2) == 1 )
                echo '<div class="col, matchWinner"><img src="rps/paper.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/paper.png" alt="rock" width="150"></div>';
        }
        if ($ran1 == 2) {
            //scissors;
            if (winner($ran1, $ran2) == 2 )
                echo '<div class="col, matchWinner"><img src="rps/scissors.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/scissors.png" alt="rock" width="150"></div>';
        }
        
        if ($ran2 == 0) {
            // $play2 = rock;
            if (winner($ran1, $ran2) == 0 )
                echo '<div class="col, matchWinner"><img src="rps/rock.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/rock.png" alt="rock" width="150"></div>';
        }
        if ($ran2 == 1) {
            // $play2 = paper;
            if (winner($ran1, $ran2) == 1 )
                echo '<div class="col, matchWinner"><img src="rps/paper.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/paper.png" alt="rock" width="150"></div>';
        }
        
        if ($ran2 == 2) {
            // $play2 = scissors;
            if (winner($ran1, $ran2) == 2 )
                echo '<div class="col, matchWinner"><img src="rps/scissors.png" alt="rock" width="150"></div>';
            else
                echo '<div class="col"><img src="rps/scissors.png" alt="rock" width="150"></div>';        
            
        }
        
        
        
            // <div class="col"><img src="rps/.png" alt="scissors" width="150"></div>
            // <div class="col, matchWinner"><img src="rps/$play2.png" alt="rock" width="150"></div>
       echo '</div>
        <hr>';
        
        
    }

    ?>    
    <!--
    <div class="row">
        <div class='col'><img src='rps/scissors.png' alt='scissors' width='150'></div>
        <div class='col, matchWinner'><img src='rps/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>

    <div class="row">
        <div class='col'><img src='rps/rock.png' alt='rock' width='150'></div>
        <div class='col, matchWinner'><img src='rps/paper.png' alt='paper' width='150'></div>
    </div>
    <hr>
    
    <div class="row">
        <div class='col, matchWinner'><img src='rps/paper.png' alt='paper' width='150'></div>
        <div class='col'><img src='rps/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>
    -->
    <div id="finalWinner">

        <h1>The winner is Player 2</h1>

    </div>
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/
</body>

</html>
