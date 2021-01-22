<?php
/*Een HTML pagina met daarin op basis van een PHP loop een list item voor elk uur van de dag .
 Als het uur het huidige uur is krijg het list item de HTML class "active" mee.*/

date_default_timezone_set('Europe/Brussels');
$currentHour = date('H',strtotime("now"));
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
        <?php for ($i = 0; $i <= 23; $i++):?>
            <?php if($currentHour == $i):?>
                <li class="active"><?= $i?></li>
            <?php else:?>
                <li><?= $i?></li>
            <?php endif;?>
        <?php endfor;?>
    </ul>

</body>
</html>
