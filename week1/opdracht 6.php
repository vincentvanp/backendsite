<?php

/*Maak een scriptje waarin een functie verwerkt zit die kan aangeven of iets een even of oneven getal is.

Maak daarna een array van random getallen (Laat PHP deze getallen genereren). Geef dan voor elk getal aan met behulp van je functie of het even of oneven is.*/

function isNumberEven($number) {
    if($number%2 == 0)
        return true;
    else
        return false;
}

for ($i = 0; $i < 10; $i++)
    $randomNumArr[$i] = rand(1,100);


for ($j = 0; $j < count($randomNumArr); $j++){
    if(isNumberEven($randomNumArr[$j]))
        echo $randomNumArr[$j] . " is een even nummer";
    else
        echo $randomNumArr[$j] . " is een oneven nummer";
    echo "<br>";
}