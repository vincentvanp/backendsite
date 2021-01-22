<?php
/*Schrijf een script dat de volgende letter van het alfabet weergeeft.
Als je b als variabele geeft staat er dus c in de browser.*/

$value = "f";
$alphabet = range("a", "z");


if($value == "z")
    echo "a";
else
    echo $alphabet[array_search($value, $alphabet) + 1];
