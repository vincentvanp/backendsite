<?php

/*Maak een scriptje dat berekend hoeveel de prijs van iets is zonder de 21% BTW.

Documenteer ook wat je hebt gedaan in de code. (Deze lijn doet dit, die doet dat,...)*/

$exclBtw = "121.00"; //Declare the sum of money excluding BTW
$inclBtw = $exclBtw * "0.79"; //Declaring the sum of money including BTW by calculation

echo "Het bedrag inclusief BTW is € " . $inclBtw; //Returning the calculated sum in a sentence