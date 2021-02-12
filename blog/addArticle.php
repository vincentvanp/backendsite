<?php
session_start();
try{
    $connection = new PDO('mysql:host=ID211210_blogopdracht.db.webhosting.be;dbname=ID211210_blogopdracht', 'ID211210_blogopdracht', 'Wachtwoord123');
} catch (Exception $exception){
    echo $exception->getMessage();
}


$getUserId = $connection->prepare('SELECT id FROM users WHERE session_id = :session');
$getUserId->bindParam(":session", $_COOKIE['auth']);
$getUserId->execute();
$getUserId->setFetchMode(PDO::FETCH_ASSOC);
$id = $getUserId->fetchAll();

$createArticle = $connection->prepare('INSERT INTO `blogposts`(`title`, `post`, `writer_id`) VALUES (:title, :post, :writer)');
$createArticle->bindParam(':title', $_POST['title']);
$createArticle->bindParam(':post', $_POST['blogpost']);
$createArticle->bindParam(':writer', $id[0]['id']);
$createArticle ->execute();

header('location: blog.php');
