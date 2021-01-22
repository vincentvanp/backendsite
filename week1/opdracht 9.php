<?php

/*Maak een scriptje dat elk jaartal vanaf 1900 toont in de browser.

Als het jaartal een speciaal jaartal is moet er achter het jaartal worden getoond welke gebeurtenis er plaats vond.

Speciale data:

    1914: WOI
    1940: WOII
    1989: Berlijnse muur
    2000: New century
*/

for ($i = 1900; $i <= 2020; $i++){
    switch ($i){
        case "1914":
            echo $i . ": WOI<br>";
            break;
        case "1940":
            echo $i . ": WOII<br>";
            break;
        case "1989":
            echo $i . ": Berlijnse muur<br>";
            break;
        case "2000":
            echo $i . ": New century<br>";
            break;
        default:
            echo $i . "<br>";
    }
}