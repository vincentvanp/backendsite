<?php

session_start();

function genrateHiddenWord($word, $guessedChars){
    $hiddenWord = "";
    for ($i = 0; $i < strlen($word); $i++){
        for ($j = 0; $j < count($guessedChars); $j++){
            if($word[$i] == $guessedChars[$j]){
                $hiddenWord .= $word[$i];
                $j = count($guessedChars);
            }
            elseif(($j == (count($guessedChars) - 1)) && ($word[$i] != $guessedChars[$j])){
                $hiddenWord .= "_";
            }
        }
    }
    return $hiddenWord;
}

$_SESSION["guessed"][] = $_POST["letter"];


if(strpos($_SESSION["word"], $_POST["letter"]) === false){
    $_SESSION["mistakes"]++;
}


$_SESSION["hiddenword"] = genrateHiddenWord($_SESSION["word"], $_SESSION["guessed"]);
unset($_POST["letter"]);

if(($_SESSION["hiddenword"] == $_SESSION["word"])){
    $_SESSION["done"] = true;
    $_SESSION["won"] = true;
}

header("location: hangman.php");
