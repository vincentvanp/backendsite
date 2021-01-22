<?php
/*Maak een scriptje dat een HTML pagina bouwt met daarin een HTML lijst op basis
 van data die in een array zit. (bvb: een array van alle docenten)*/

$teachers = ["Sam", "Alessandro", "Koen", "Wim"];

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
    <ul>
    <?php foreach ($teachers as $teacher): ?>
        <li><?= $teacher ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
