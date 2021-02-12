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
    <?php if($_SESSION['emailExists']): ?>
        <h2>Email already exists. Try again.</h2>
    <?php endif; ?>
    <form method="post" action="register_user.php">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">

        <label for="firstname">First name:</label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Last name:</label>
        <input type="text" name="lastname" id="lastname">

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="m">m</option>
            <option value="v">v</option>
            <option value="o">o</option>
        </select>
        <button>Register</button>
    </form>
</body>
</html>