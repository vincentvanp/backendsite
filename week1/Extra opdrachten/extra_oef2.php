<?php

/*’Maak opnieuw een kerstboom in de browser.
Deze keer wel langs 2 kanten en met een stam en pot eronder.*/

echo "<center>";
for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= $i; $j++)
        echo "*";
    echo "</br>";
}
echo "| </br>";
for ($u = 1; $u <= 2; $u++){
    for ($v = 1; $v <= 3; $v++)
        echo "-";
    echo "</br>";
}
echo "</center>";

