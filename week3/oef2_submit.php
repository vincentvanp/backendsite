<?php

try{
    $connection = new PDO('mysql:host=localhost;dbname=todo', 'root', 'root');
} catch (Exception $exception){
    echo $exception->getMessage();
}

$addTodoStatement = $connection->prepare("INSERT INTO `todos`(`title`) VALUES ( :todo )");
$addTodoStatement->bindParam('todo',$_POST["todo"]);
$addTodoStatement->execute();

header("location: oef2.php");

