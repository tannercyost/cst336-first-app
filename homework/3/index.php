<?php
    session_start();
    include 'php/functions.php';
    if (isset($_POST)) {
        $_SESSION['post-data'] = $_POST;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>DND Character Generator</h1>
        <h3>Fill out the following information to generate a DND character.</h3>
        <br />
        
        <form method="post" action="character.php">
            Character name: <input type="text" name="charName" value="<?php isset($_POST['charName']) ? $_POST['charName'] : ""; ?>"></input> <br/>

            Character race:
            <select name="charRace">
              <option value="dragonborn">Dragonborn (+2 str)</option>
              <option value="dwarf">Dwarf (+2 con)</option>
              <option value="elf">Elf (+2 dex)</option>
              <option value="gnome">Gnome (+2 dex)</option>
              <option value="Half-Elf">Half-elf (+1 dex, +1 cha)</option>
              <option value="halfling">Halfling (+1 dex, +1 str)</option>
              <option value="human">Human (+2 cha)</option>
            </select>
            <br />
            Character class:
            <select name = "charClass">
              <option value="cleric">Cleric</option>
              <option value="druid">Druid</option>
              <option value="fighter">Fighter</option>
              <option value="monk">Monk</option>
              <option value="paladin">Paladin</option>
              <option value="ranger">Ranger</option>
              <option value="rogue">Rogue</option>
              <option value="fighter">Fighter</option>
              <option value="wizard">Wizard</option>
            </select>
            <br />
            <br />
            Select 2 stats to bonus, you will get +4 to these stats:
            <br />
            <input id="str" type="checkbox" name="stat[]" value="str"><label for="str"> Strength</label><br>
            <input id="dex" type="checkbox" name="stat[]" value="dex"><label for="dex"> Dexterity</label><br>
            <input id="con" type="checkbox" name="stat[]" value="con"><label for="con"> Constitution</label><br>
            <input id="int" type="checkbox" name="stat[]" value="int"><label for="int"> Intelligence</label><br>
            <input id="wis" type="checkbox" name="stat[]" value="wis"><label for="wis"> Wisdom</label><br>
            <input id="cha" type="checkbox" name="stat[]" value="cha"><label for="cha"> Charisma</label><br>
            <br />
            <br />
            Select a bonus ability, you will get a +2 roll bonus with this ability: 
            <br />
            <input id="his" type="radio" name="ability" value="his"><label for="his"> History</label> <br />
            <input id="deception" type="radio" name="ability" value="deception"><label for="deception"> Deception</label><br />
            <input id="athletics" type="radio" name="ability" value="athletics"><label for="athletics"> Athletics</label> <br />
            <input id="medicine" type="radio" name="ability" value="medicine"><label for="medicine"> Medicine</label> <br />
            <input id="stealth" type="radio" name="ability" value="stealth"><label for="stealth"> Stealth</label> <br />
            
            
            <input type="submit"></input>
        </form>
        
        <a href="character.php">View character sheet</a>
        <?php
            
        ?>

    </body>
</html>