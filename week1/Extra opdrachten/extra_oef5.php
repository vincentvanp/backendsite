<?php
//Schrijf een script dat de naamuit een email probeert te halen.

$email = "vincent.van.  puymbroeck@student.kdg.be";
$name = substr($email, 0, strpos($email, "@"));
$name = preg_replace('/\./', ' ', $name);
echo $name;
