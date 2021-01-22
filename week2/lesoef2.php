<?php
//btw bij een bedrag berekenen

$exclBtw = "10.00";
$inclBtw = $exclBtw * 1.21;

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
    <p>Het bedrag exclusief BTW is: <?= $exclBtw?></p>
    <p>Het bedrag inclusief BTW is: <?= $inclBtw?></p>
</body>
</html>