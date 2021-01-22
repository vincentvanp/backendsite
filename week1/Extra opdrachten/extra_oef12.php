<?php
/*Maak een minesweeper veld van 10x10 in de browser dat random gegenereerd is. Lege vakjes als . bommen als *.
Elk gegenereerd vakje heeft 5% kans om een bom vakje te zijn.*/


for ($i = 0; $i < 10; $i++){
    for ($j = 0; $j < 10; $j++){
        $rng = rand(1, 100);
        if($rng <= 5)
            $mineField[$i][$j] = true;
        else
            $mineField[$i][$j] = false;
    }
}


for ($k = 0; $k < 10; $k++){
    for ($l = 0; $l < 10; $l++){
        if ($mineField[$k][$l] == true)
            echo "*";
        else
            echo ".";
    }
    echo "<br>";
}