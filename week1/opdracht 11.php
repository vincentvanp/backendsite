S<?php

/*December is begonnen dus het is bijna kerstmis. Maak een scriptje dat weergeeft hoelang het nog is tot kerstmis.

Toon dit verschil in: dagen,uren,minuten.*/

date_default_timezone_set("Europe/Brussels");
$kerstmis = strtotime("25 december 2020");
$today = strtotime("now");

echo "seconds: ". ($kerstmis - $today);
echo "<br>";
echo "minutes: ". ($kerstmis - $today)/60;
echo "<br>";
echo "hours: ". (($kerstmis - $today)/60)/60;
echo "<br>";
echo "days: ". ((($kerstmis - $today)/60)/60)/24;
echo "<br>";