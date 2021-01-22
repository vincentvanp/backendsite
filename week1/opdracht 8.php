<?php

/*Maar een scriptje dat voor elke student (fictief) bijhoud hoeveel zijn punt op 20 is.

Toon het punt van elke student.

Sorteer de studenten op basis van hun punt aflopen/oplopend

Bereken het klasgemiddelde. (Kan je dit in een functie schrijven?)

Bereken de mediaan van de klas. (Kan je dit in een functie schrijven?)*/

//Function to check if number is even
function isNumberEven($number) {
    if($number%2 == 0)
        return true;
    else
        return false;
}


//median script
function median($valuesToMed){
    sort($valuesToMed);
    $valueCount = count($valuesToMed);
    if(isNumberEven($valueCount))
        return ($valuesToMed[$valueCount/2] +$valuesToMed[$valueCount/2 - 1])/2;
    else
        return $valuesToMed[floor($valueCount/2)];
}

//average script
function average($valuesToAverage){
    foreach($valuesToAverage as $value)
        $total += $value;
    return $total/count($valuesToAverage);
}


$studentScores = [
    "Vincent" => "18",
    "Jan" => "9",
    "Piet" => "11",
    "Henk" => "16",
    "Erik" => "12",
    "Joris" => "6",
];

//Display student and their scores
foreach($studentScores as $score){
    echo array_search($score,$studentScores) . ": ";
    echo $score;
    echo "<br>";
}
echo "<br>";
echo "<br>";




//Sort students ascending and display scores
echo "Ascending scores.";
echo "<br>";
asort($studentScores);
foreach($studentScores as $score){
    echo array_search($score,$studentScores) . ": ";
    echo $score;
    echo "<br>";
}
echo "<br>";
echo "<br>";




//Sort students descending and display scores
echo "Descending scores.";
echo "<br>";
arsort($studentScores);
foreach($studentScores as $score){
    echo array_search($score,$studentScores) . ": ";
    echo $score;
    echo "<br>";
}



echo "<br>";
echo "<br>";
echo "The median is: " . median($studentScores);
echo "<br>";
echo "The average is: " . average($studentScores);