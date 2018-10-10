<?php 
    session_start();
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Password Generator</title>
  </head>
  <body>
    <h1>Custom Password Generator</h1>
    <h2></h2>
    
    <form method="post">
        How many passwords? <input type="text" name="number"></input> (No more than 8)<br/>
        Password Length:
        <br />
        <input type="radio" name="length" value="6" checked> 6 characters 
        <input type="radio" name="length" value="8"> 8 characters 
        <input type="radio" name="length" value="10"> 10 characters 
        <br />
        <input type="checkbox" name="digits" value="incDigits"> Include digits (up to 3 digits will be part of the password) <br /> 
        <br /> <br />
        <input type="submit" value="Generate Passwords!"></input>
        <br /> <br />
        <input type="submit" value="Show Password History"></input>
    </form>
  </body>
</html>