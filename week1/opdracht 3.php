<?php

/*Maak een scriptje dat automatisch alle maaltafels toont. Dus:

1 X 1 = 1

1 X 2 = 2

...

10 X 10 = 100*/

for ($i = 1; $i <= 10; $i++)
{
    for ($j = 1; $j <= 10; $j++)
    {
        $sum = $i * $j;
        echo $i . "X" . $j . "=" . $sum . " ";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
}