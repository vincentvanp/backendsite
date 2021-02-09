<?php
session_start();

function checkWin($guessed, $solutions){
    $count = "0";
    if(count($guessed) < count($solutions)){
        return false;
    }
    else{
        foreach ($guessed as $guess){
            if(in_array($guess, $solutions)){
                $count++;
            }
        }
        if($count == count($solutions)){
            return true;
        }
        else{
            return false;
        }
    }
}


$shipOne = ["b2", "b3"];
$shipTwo = ["c5", "c6"];
$shipThree = ["e4", "e5", "e6"];
$shipFour = ["a7", "b7", "c7", "d7"];
$shipFive = ["f2", "f3", "f4", "f5", "f6"];

$_SESSION["ships"] = array_merge($shipOne, $shipTwo, $shipThree, $shipFour, $shipFive);


$guess = $_POST["letter"] . $_POST["number"];

if(in_array($guess, $_SESSION["guessed"])){
    $_SESSION["reply"] = 3; //already guessed = 3, Miss = 1, Hit = 2
}
elseif(in_array($guess, $_SESSION["ships"])){
    $_SESSION["reply"] = 2; //already guessed = 3, Miss = 1, Hit = 2
    $_SESSION["guessed"][] = $guess;
    $_SESSION["won"] = checkWin($_SESSION["guessed"], $_SESSION["ships"]);
}
else{
    $_SESSION["reply"] = 1; //already guessed = 2, Miss = 0, Hit = 1
    $_SESSION["guessed"][] = $guess;
}


header("location: index.php");