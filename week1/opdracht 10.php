<?php

/*Maak een scriptje dat de gebruiker begroet op basis van het moment van de dag.

    In de voormiddag: "Goedemorgen"
    In de namiddag: "Goedenamiddag"
    S'avonds: "Goedenavond"
    S'nachts: "Goedenacht
*/

/* Voormiddag 6:00 - 11:59
   Namiddag 12:00 - 17:59
   Avond 18:00 - 22:59
   Nacht 23:00 - 5:59
 */


//$d = strtotime("9 hours");
date_default_timezone_set("Europe/Brussels");
$hour = date("h"/*, $d*/);
$amPm = date("a"/*, $d*/);

if(($amPm == "pm" && $hour == "12") || ($amPm == "pm" && $hour < "6"))
    echo "Goedenamiddag";
elseif($amPm == "pm" && $hour < "11")
    echo "Goedenavond";
elseif(($amPm == "pm" && $hour == "11") || ($amPm == "am" && $hour == "12") || ($amPm == "am" && $hour < "6"))
    echo "Goedenacht";
else
    echo "Goedemorgen";