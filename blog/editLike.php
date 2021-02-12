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

$getLikes = $connection->prepare('SELECT * FROM likes WHERE post_id = :post AND user_id = :userid');
$getLikes->bindParam(':post', $_POST['like']);
$getLikes->bindParam(':userid', $id[0]['id']);
$getLikes ->execute();
$getLikes->setFetchMode(PDO::FETCH_ASSOC);
$likes = $getLikes->fetchAll();

if(count($likes) == 0){
    $createLike = $connection->prepare('INSERT INTO `likes`(`post_id`, `user_id`) VALUES (:post, :userid )');
    $createLike->bindParam(':post', $_POST['like']);
    $createLike->bindParam(':userid', $id[0]['id']);
    $createLike ->execute();
}
else{
    $removeLike = $connection->prepare('DELETE FROM `likes` WHERE post_id = :post AND user_id = :userid');
    $removeLike->bindParam(':post', $_POST['like']);
    $removeLike->bindParam(':userid', $id[0]['id']);
    $removeLike ->execute();
    echo '1';
}



header('location: blog.php');
