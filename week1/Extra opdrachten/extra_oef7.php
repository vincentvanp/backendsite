<?php

/*Filter alle niet-palindromen uit een lijst woorden.
Schrijf een functie die een lijst meekrijgt en een nieuwe lijst woorden teruggeeft met alleen de palindromen.*/

function removeNonPalindrome($list){
    foreach ($list as $word){
        $reverseWord = "";
        for($i = strlen($word) - 1; $i >= 0; $i--)
            $reverseWord .= $word[$i];
        if($word == $reverseWord) {
            $palinList[] = $word;
        }
    }
    return $palinList;
}


$wordList = ["lepel","hallo","negen","php","gisteren","doos"];
echo "All words: <br>";
foreach ($wordList as $word)
    echo $word . " ";
echo "<br>";

$wordsWithoutPal = removeNonPalindrome($wordList);
echo "Only palindromes: <br>";
foreach ($wordsWithoutPal as $word)
    echo $word . " ";