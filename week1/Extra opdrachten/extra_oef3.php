<?php
/*Scrijf een script dat alle niet nummer characters van een variabele verwijdert buiten ‘,’ of ‘.’.*/

$value = "$10.000,50 to pay ";
$value = preg_replace('/[^0-9\-,-.]/', '', $value);
echo $value;