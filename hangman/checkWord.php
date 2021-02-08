<?php

session_start();

if($_POST["guessedWord"] == $_SESSION["word"]){
    $_SESSION["done"] = true;
    $_SESSION["won"] = true;
}

else{
    $_SESSION["mistakes"]++;
}

header("location: hangman.php");