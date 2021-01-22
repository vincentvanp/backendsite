<?php
/*Maak een simpel scriptje dat volgende GET parameters ophaalt uit de URL en hun waarde toont.

first_param
second_param
third_param*/
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
    <h1><?= $_GET["first_param"] ?></h1>
    <h1><?= $_GET["second_param"] ?></h1>
    <h1><?= $_GET["third_param"] ?></h1>
</body>
</html>
