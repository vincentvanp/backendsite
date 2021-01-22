<?php
/*Een HTML pagina waar er op basis van een random PHP nummer tussen 1 en 6 een
 random HTML titel wordt gemaakt. <h1> t.e.m <h5>*/

$rnd = rand("1", "5");
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
    <h<?= $rnd ?>>Hallo</h<?= $rnd ?>>
</body>
</html>
