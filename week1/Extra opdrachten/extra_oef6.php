<?php
/*Schrijf een script waarin je een deck kaarten maakt via een functie en dan telkens
een random kaart laat zien aan de browser.*/

function fillCardDeck($cardType, $cardWorth){
    for ($i = 0; $i < count($cardType); $i++){
        for ($j = 0; $j < count($cardWorth); $j++)
            $deck[] =  $cardWorth[$j] . $cardType[$i];
    }
    return $deck;
}

$cardType = ["H", "K", "R", "S"];
$cardWorth = ["1", "2", "3", "4", "5", "6", "7" , "8", "9", "10", "Jack", "Queen", "King"];


$deck = fillCardDeck($cardType, $cardWorth);

echo $deck[rand(0, count($deck) - 1)];


