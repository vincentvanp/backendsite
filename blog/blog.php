<?php
session_start();

try{
    $connection = new PDO('mysql:host=ID211210_blogopdracht.db.webhosting.be;dbname=ID211210_blogopdracht', 'ID211210_blogopdracht', 'Wachtwoord123');
} catch (Exception $exception){
    echo $exception->getMessage();
}

$getPostsStatement = $connection->prepare('SELECT * FROM blogposts');
$getPostsStatement -> execute();
$getPostsStatement -> setFetchMode(PDO::FETCH_ASSOC);
$posts = $getPostsStatement -> fetchAll();



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
    <?php if(!$_COOKIE['auth']): ?>
        <?php if($_SESSION["registered"]): ?>
            <p>Registration complete. You can now log in.</p>
        <?php endif; ?>

        <?php if($_SESSION["wrong"]): ?>
            <p>Wrong username or password</p>
        <?php endif; ?>


        <form method="post" action="login.php">
            <label for="email">email:</label>
            <input type="text" name="email" id="email">

            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass">

            <button>Login</button>
        </form>

        <form action="register.php">
            <button>Register</button>
        </form>
    <?php else: ?>
        <form method="post" action="addArticle.php">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">

            <label for="blogpost">Post:</label>
            <textarea name="blogpost"></textarea>

            <button>Post</button>
        </form>


    <?php endif; ?>



    <?php foreach ($posts as $post): ?>
        <h1><?= $post["title"] ?></h1>
        <p><?= $post["post"] ?></p>
        <form action="detail.php" method="post">
            <button name="postid" value="<?= $post["id"] ?>">Continue reading</button>
        </form>
    <?php endforeach; ?>
</body>
</html>