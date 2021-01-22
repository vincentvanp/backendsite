<?php
/*Schrijf een script dat alle elementen van een array een plaats naar links opschuift in een nieuwe array.
 Eerste getal staat op de laatste index.*/

$values = range("a", "z");
for ($i = 1; $i < count($values); $i++)
    $weirdValues[] = $values[$i];
$weirdValues[] = $values[0];

foreach($values as $value)
    echo $value . " ";
echo "<br>";
foreach($weirdValues as $weirdValue)
    echo $weirdValue . " ";