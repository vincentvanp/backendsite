<?php
/*Schrijf een functie die checkt of een getal een priemgetal is. Roep deze functie op voor een paar getallen.*/

function isPrime($n){
    if($n == 1)
        return false;
    elseif($n == 2)
        return true;
    else{
        for ($i = 2; $i < $n; $i++){
            if($n % $i == 0)
                return false;
        }
        return true;
    }
}

$num = "113’";

if(isPrime($num))
    echo "priem";
else
    echo "geen priem";