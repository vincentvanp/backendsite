<?php
/*Maak een secret santa script. Hierin zitten alle mensen die meedoen.
Stuur naar de browser wie wie heeft.*/

function chooseSanta($people){
    $secretSanta = [];
    for ($i = 0; $i < count($people); $i++){
        do{
            do
                $random = rand(0, count($people) - 1);
            while(array_search($people[$random], $secretSanta) !== false);
            $secretSanta[$people[$i]] = $people[$random];
        }

        while (($secretSanta[$people[$i]] == $people[$i]));
    }
    return $secretSanta;
}

$participants = ["Vincent","Jan","Piet","Joris","Henk","Frank","Erik"];

$result = chooseSanta($participants);
foreach($result as $name)
    echo array_search($name, $result) . ": " .  $name . "<br>";

