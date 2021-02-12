<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=games', 'root', 'root');
} catch (Exception $exception){
    echo $exception->getMessage();
}

if(isset($_POST["title"]) && isset($_POST["rating"])){
    $addGameState = $connection->prepare('INSERT INTO `games`(`title`, `rating`) VALUES (:title,:rating)');
    $addGameState->bindParam('title',$_POST["title"]);
    $addGameState->bindParam('rating',$_POST["rating"]);
    $addGameState->execute();
    header('location: oef3.php');
}

else{
    header('location: oef3.php');
}