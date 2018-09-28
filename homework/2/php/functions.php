<?php
    function generateRolls($numOfDice) {
        $rolls = array();
        for ($i=0;$i<$numOfDice;$i++) {
            $rolls[$i] = (string) rand(1,6);
        }
        return $rolls;
    }
?>