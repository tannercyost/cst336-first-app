<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        
        <?php

        $total = 0;
        $iterations = 9;
        echo '<table>';

        for ($i = 0; $i < $iterations; $i++) {
            echo '<tr>';
            $num = rand(1, 20);
            $odd_or_even = (0 == $num % 2) ? 'even' : 'odd';
            echo "<td>$num</td><td>$odd_or_even</td></tr>";
            $total += $num;
        }
        $avg = $total / $iterations;
        $avg = number_format($avg, 2);
        echo "<tr><td>$avg</td></tr></table>";

        ?>

    </body>
</html>