<?php
    //include 'php/functions.php';
    //print_r($_SESSION);
    if (!empty($_POST['charName'])) {
        $str = 10;
        $dex = 10;
        $con = 10;
        $int = 10;
        $wis = 10;
        $cha = 10;
        
        $his = 0;
        $deception = 0;
        $athletics = 0;
        $medicine = 0;
        $stealth = 0;
        
        $name = $_POST['charName'];
        $race = $_POST['charRace'];
        $class = $_POST['charClass'];
        $stat1 = $_POST['stat'][0];
        $stat2 = $_POST['stat'][1];
        $ability = $_POST['ability'];

        
        //selected stat
        if ($stat1 == "str" or $stat2 === "str") {
            $str += 4;
        }
        if ($stat1 == "dex" or $stat2 == "dex") {
            $dex += 4;
        }
        if ($stat1 == "con" or $stat2 == "con") {
            $con += 4;
        }
        if ($stat1 == "int" or $stat2 == "int") {
            $int += 4;
        }
        if ($stat1 == "wis" or $stat2 == "wis") {
            $wis += 4;
        }
        if ($stat1 == "cha" or $stat2 == "cha") {
            $cha += 4;
        }
        
        //racial stat
        if ($race == "dragonborn") {
            $str += 2;
        }
        if ($race == "dwarf") {
            $con += 2;
        }
        if ($race == "elf") {
            $dex += 2;
        }
        if ($race == "gnome") {
            $dex += 2;
        }
        if ($race == "Half-Elf") {
            $dex += 1;
            $cha += 1;
        }
        if ($race == "halfling") {
            $dex += 1;
            $str += 1;
        }
        if ($race == "human") {
            $cha += 2;
        }
        
        //selected
        if ($ability == "his") {
            $his += 2;
        }
        if ($ability == "deception") {
            $deception += 2;
        }
        if ($ability == "athletics") {
            $athletics += 2;
        }
        if ($ability == "medicine") {
            $medicine += 2;
        }
        if ($ability == "stealth") {
            $stealth += 2;
        }
        // echo "$stat1";
        // echo "$stat2";
        // echo "$name";
        // print_r($_POST);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DND Character Sheet</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>DND Character Generator</h1>
        <br />
        <?php
        if (empty($_POST['charName'])) {
            echo "<h3>You must name your character, go back and try again.</h3>";
        }
        else { 
        
            
        echo "<h3>Name<p>$name</p></h3>";
        echo "<h3>Race<p>$race</p></h3>";
        echo "<h3>Class<p>$class</p></h3>";
        echo "<div id='stats'>";
            echo "<h2>Stats:</h2>";
            echo "<h3 class='finalStats'>Strength: $str</h3>";
            echo "<h3 class='finalStats'>Dexterity: $dex</h3>";
            echo "<h3 class='finalStats'>Constitution: $con</h3>";
            echo "<h3 class='finalStats'>Intelligence: $int</h3>";
            echo "<h3 class='finalStats'>Wisdom: $wis</h3>";
            echo "<h3 class='finalStats'>Charisma: $cha</h3>";
        echo "</div>";
        echo "<div id='abilities'>";
            echo "<h2>Abilities:</h2>";
            echo "<h3 class='finalAbilities'>History: $his</h3>";
            echo "<h3 class='finalAbilities'>Deception: $deception</h3>";
            echo "<h3 class='finalAbilities'>Athletics: $athletics</h3>";
            echo "<h3 class='finalAbilities'>Medicine: $medicine</h3>";
            echo "<h3 class='finalAbilities'>Stealth: $stealth</h3>";
        echo "</div>";

            
        
        }
        ?>
        
        <h4><a href="index.php">Create Another Character</a></h4>
    </body>
</html>