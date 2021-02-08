<?php
session_start();
if(!isset($_COOKIE["name"])){
    setcookie("name", $_GET["name"], Time() + 3600);
    $_SESSION["userScore"] = 0;
}


function genrateFirstHiddenWord($word){
    $hiddenWord = "";
    for ($i = 0; $i < strlen($word); $i++){
        $hiddenWord .= "_";
    }
    return $hiddenWord;
}


$wordList = ["school", "computer", "laptop", "cursor", "pizza", "landbouw", "sneeuw", "fiets", "naald", "blad", "pen"];

$_SESSION["word"] = $wordList[rand(0, count($wordList) - 1)];


unset($_SESSION["guessed"]);
$_SESSION["mistakes"] = 0;
$_SESSION["won"] = false;
$_SESSION["done"] = false;
$_SESSION["hiddenword"] = genrateFirstHiddenWord($_SESSION["word"]);

header("location: hangman.php");
