<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        
        <?php
        
        $weekdays = array();
        $weekdays[] = "M";
        $weekdays[] = "T"; 
        array_push($weekdays,"W"); 
        echo "Displaying values using var_dump:";
        var_dump($weekdays);
        echo "<br><br>";
        echo "Displaying values using print_r:";
        print_r($weekdays);
        
        foreach ($weekdays as $day) {
        	echo "<br><br> $day";
        } 




        ?>

    </body>
</html>