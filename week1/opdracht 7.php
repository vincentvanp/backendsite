<?php

/*Maak een scriptje dat voor elke Radiozender (MNM,Radio 1, Radio 2,...) saved in een variabelen wat de 3 meest gedraaide nummers zijn.

Daarna lus je deze uit in volgend formaat:

MNM

1: Nummer X

2: Nummer Y

3: Nummer Z

RADIO 2

1: Nummer X

2: Nummer Y

3: Nummer Z

...*/

$radioTopSongs = array(
    $mnmTopSongs = ["MnM","Fever","Nu wij niet meer praten","Head & Heart"],
    $studBrusselTopSongs = ["Studio Brussel","Survivin","Feeling so real","Electricity"],
    $qMusicTopSongs = ["Q-Music","Hoe het danst","Piece of your heart","Old town road (remix)"],
    $radio2TopSongs = ["Radio 2","Nu wij niet meer praten","Vechter","Positions"],
    $radio1TopSongs = ["Radio 1","Hello sunshine","Ostende bonsoir","Steentje"],
);

foreach ($radioTopSongs as $topSongs){
    echo $topSongs[0];
    echo "<br>";
    echo "<br>";
    for ($i = 1; $i <= count($topSongs) - 1; $i++){
        echo $i . ": " . $topSongs[$i];
        echo "<br>";
        echo "<br>";
    }
}
