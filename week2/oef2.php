<?php
/*Maak een scriptje dat het tijdstip van de dag omzet naar geschreven tekst.
Die geschreven tekst wordt in een HTML pagina getoond met de geschreven tekst in een paragraph.
bvb: Het is nu één uur en drieëntwintig minuten.*/


date_default_timezone_set('Europe/Brussels');

$f = new NumberFormatter("nl", NumberFormatter::SPELLOUT);
$hour = $f->format(date('H',strtotime("now")));
$minutes = $f->format(date('i',strtotime("now")));

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
    <p><?= "Het is nu " . $hour . " uur en " . $minutes . " minuten."?></p>
</body>
</html>
