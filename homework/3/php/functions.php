<?php
    function calculateStats($str, $dex, $con, $int, $wis, $cha, $race, $stat1, $stat2) {
        //selected stat
        if ($stat1 || $stat2 == "str") {
            $str += 4;
        }
        if ($stat1 || $stat2 == "dex") {
            $dex += 4;
        }
        if ($stat1 || $stat2 == "con") {
            $con += 4;
        }
        if ($stat1 || $stat2 == "int") {
            $int += 4;
        }
        if ($stat1 || $stat2 == "wis") {
            $wis += 4;
        }
        if ($stat1 || $stat2 == "cha") {
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
        if ($race == "helf") {
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
    }
    
    function calculateAbilities($ability, $his, $deception, $athletics, $medicine, $stealth) {
        //selected ability
        if (ability == "his") {
            $his += 2;
        }
        if (ability == "deception") {
            $deception += 2;
        }
        if (ability == "athletics") {
            $athletics += 2;
        }
        if (ability == "medicine") {
            $medicine += 2;
        }
        if (ability == "stealth") {
            $stealth += 2;
        }
    }
?>