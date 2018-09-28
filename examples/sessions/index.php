<?php
session_start();



?>

<?php

if (isset($_POST['names']))
{
    $names = $_POST['names'];
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
       
       
        <!--<form action="index.php"  method="post" >-->
        <!--    First Name: <input type=text name="firstName[]">-->
        <!--    Last Name: <input type=text name="firstName[]">-->
        <!--	<input type="submit" value="Save" />-->
        <!--</form>-->

       
        
        <div>
            <form action="index.php" method="post">
                
                Baby names: <br>
                <input type="radio" name="name"  value="1" >
                     <label for="item1"> <input type="text" id="name1" size="25" value="<?php echo $names[0]; ?>" name="names[]" /></label> <br>
     
                <input type="radio" name="name"  value="2" >
                     <label for="item2"> <input type="text" id="name2" size="25" value="<?php echo $names[1]; ?>" name="names[]" /></label> <br>
                     
                <input type="radio" name="name"  value="3" >
                     <label for="item3"> <input type="text" id="name3" size="25" value="<?php echo $names[2]; ?>" name="names[]" /></label> <br>
                     
                <input type="radio" name="name"  value="4" >
                     <label for="item4"> <input type="text" id="name4" size="25" value="<?php echo $names[3]; ?>" name="names[]" /></label> <br>
                     
                <input type="radio" name="name"  value="5" >
                     <label for="item5"> <input type="text" id="name5" size="25" value="<?php echo $names[4]; ?>" name="names[]" /></label> <br>

                <br/><br/>
                <input type="submit" value="Save" />
                <input type="button" value="Clear" onclick="displayData()"/>
              </form>
        </div>
        
    </body>
</html>