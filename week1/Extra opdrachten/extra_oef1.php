<?php

/*Kijk na of een woord een palindroom is.
Een palindroom is een woord dat hetzelfde blijft als je het omdraait zoals ‘lepel’.*/

$word = "lepel";

for($i = strlen($word) - 1; $i >= 0; $i--)
    $reverseWord .= $word[$i];

if($word == $reverseWord)
    echo "Het woord is een palindroom.";
else
    echo "Het woord is geen palindroom.";