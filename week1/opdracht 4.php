<?php
/*Maak een scriptje dat een kerstboom kan tonen in de browser met het karaker *

Dus:

*

**

***

****

...*/

for ($i = 1; $i <= 10; $i++)
{
    for ($j = 1; $j <= $i; $j++)
    {
        echo "*";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
}