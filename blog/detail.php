<?php
try{
    $connection = new PDO('mysql:host=ID211210_blogopdracht.db.webhosting.be;dbname=ID211210_blogopdracht', 'ID211210_blogopdracht', 'Wachtwoord123');
} catch (Exception $exception){
    echo $exception->getMessage();
}

$getPostStatement = $connection->prepare('SELECT * FROM blogposts WHERE id = :id');
$getPostStatement -> bindParam('id', $_POST['postid']);
$getPostStatement -> execute();
$getPostStatement -> setFetchMode(PDO::FETCH_ASSOC);
$post = $getPostStatement -> fetchAll();


$getPostComments = $connection->prepare('SELECT * FROM reactions WHERE post_id = :id');
$getPostComments -> bindParam('id', $_POST['postid']);
$getPostComments -> execute();
$getPostComments -> setFetchMode(PDO::FETCH_ASSOC);
$comments = $getPostComments -> fetchAll();


$getAuthor = $connection->prepare('SELECT first_name FROM users WHERE id = :id');
$getAuthor -> bindParam(':id', $post[0]['writer_id']);
$getAuthor ->execute();
$getAuthor ->setFetchMode(PDO::FETCH_ASSOC);
$author = $getAuthor->fetchAll();

$getUsers = $connection->prepare('SELECT first_name FROM users WHERE id = :id');

$getLikes = $connection->prepare('SELECT * FROM `likes` WHERE post_id = :id');
$getLikes -> bindParam(':id', $post[0]['id']);
$getLikes ->execute();
$getLikes ->setFetchMode(PDO::FETCH_ASSOC);
$likes = $getLikes->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1><?= $post[0]["title"]; ?></h1>
    <h2>Written by: <?= $author[0]['first_name'];?></h2>
    <p><?= $post[0]["post"]; ?></p>
    <p>Likes: <?= count($likes) ?></p>


    <?php if($_COOKIE['auth']): ?>
        <form action="editLike.php" method="post"><button name="like" value="<?= $post[0]['id']; ?>">Like</button></form>
    <?php endif; ?>

    <h2>Comments</h2>

    <?php foreach ($comments as $comment): ?>
        <?php $getUsers -> bindParam('id', $comment['writer_id']); ?>
        <?php $getUsers -> execute(); ?>
        <?php $getUsers -> setFetchMode(PDO::FETCH_ASSOC); ?>
        <?php $user = $getUsers -> fetchAll();?>
        <h3><?= $user[0]['first_name']; ?></h3>
        <p><?= $comment['post']; ?></p>
    <?php endforeach; ?>


    <?php if($_COOKIE['auth']): ?>
        <form method="post" action="addComment.php">
            <label for="comment">Comment:</label>
            <textarea name="comment"></textarea>
            <button value="<?= $post[0]['id']; ?>" name="postcommentid">Post</button>
        </form>
    <?php endif; ?>

    <form action="blog.php"><button>Home</button></form>


</body>
</html>