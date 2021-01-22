<?php
/*Schrijf een script dat alle delers van een getal in de browser weergeeft.*/


$value = "30";
echo "delers: <br>";
for ($i = 1; $i <= $value; $i++) {
    if ($value % $i == 0)
        echo $i . "<br>";
}
