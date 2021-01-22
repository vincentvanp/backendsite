<?php
/*Maak een formulier waar een gebruiker kan registreren om de nieuwbrief te ontvangen. Je maakt een scriptje dat
deze data zal valideren (Email mag niet leeg zijn, Email moet een email zijn, Email moet een KdG email zijn!).

Als de data valid is zal de gebruiker worden gesubscribed. (Dit hoef je niet te doen, je mag gewoon: "OK" tonen)

Extra: Als er een error is met de gebruiker zijn E-mail wordt deze error in de sessie gezet en getoond aan de gebruiker.*/
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
<form action="oef10.1.php" method="post">
    <input type="text" name="email">
    <button>Send</button>
</form>
<?php if ($_SESSION["email"] == "error"): ?>
<?= "Wrong or empty email."?>
<?php elseif(!(isset($_SESSION["email"]))):?>
<?= ""?>
<?php else: ?>
<?= "Registered" ?>
<?php endif; ?>
<?php die(); ?>
</body>
</html>
