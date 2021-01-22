<?php
/*Maak een simpel scriptje dat volgende POST parameters ophaalt uit de request en hun waarde toont.

(Tip: Maak gebruik van Postman of andere 😉)

first_name
last_name
company_name*/


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
<h1><?= $_POST["first_name"] ?></h1>
<h1><?= $_POST["last_name"] ?></h1>
<h1><?= $_POST["company_name"] ?></h1>
</body>
</html>
