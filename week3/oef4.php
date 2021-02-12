<?php
session_start();

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

    <?php if($_SESSION["wrong"]): ?>
        <p>Wrong username or password</p>
    <?php endif; ?>

    <form method="post" action="oef4_login.php">
        <label for="user">Username:</label>
        <input type="text" name="user" id="user">

        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">

        <button>Login</button>
    </form>
</body>
</html>
