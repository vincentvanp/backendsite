<?php

/*Maak een scriptje waar je een random zin in een variabele zet. De random zin mag hardcoded in de variabele worden gezet.

Van deze zin haal je op:

    Hoe lang hij is
    Of het woord "NxT" er in voorkomt.
    Of het woord "Fuck" er in voorkomt. Het woord vervang je door "****" voor je de string naar de browser stuurt.
*/

$randomSentence = "Fuck previous I study NxT";
echo "The sentence is: " . $randomSentence;
echo "<br>";


echo "The length of the string is: " . strlen($randomSentence);
echo "<br>";


if(strpos($randomSentence, NxT) !== false){
    echo "The string contains NxT.";
}
else {
    echo "The string does not contain NxT.";
}
echo"<br>";



if(strpos($randomSentence, Fuck) !== false)
    echo str_replace(Fuck, "****", $randomSentence);
else
    echo "The string doesn't contain f***";
