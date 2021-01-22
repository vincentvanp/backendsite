<?php
/*Maak een formulier met checkboxes. Elk van deze checkboxes zal een categorie
  van cookies voorstellen. De gebruiker kan aanduiden of hij wil dat cookies van
 die categorie gebruikt mogen worden of niet. Er is een scriptje dat dit formulier
  afhandelt en de cookies zet (of niet). Het spreekt voor zich dat een gebruiker
 deze voorkeuren maar één keer moet ingeven en daarna niet meer. Dan wordt enkel de
  tekst getoond: "U heeft u voorkeuren al ingesteld"*/

if(!isset($_COOKIE["preferences"])){
    setcookie("preferences", "set", Time() + 3600);
}


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



<?php if(!isset($_COOKIE["preferences"])): ?>
<form method="get">
    <input type="checkbox" name="chocolate" id="chocolate"><label for="chocolate">Chocolat cookies</label>
    <input type="checkbox" name="american" id="american"><label for="american">American cookies</label>
    <input type="checkbox" name="diet" id="diet"><label for="diet">diet cookies</label>
    <button>Send</button>
        <?php if($_GET["american"] == "on"):?>
            <?php setcookie("american", "set", Time() + 3600);?>
        <?php endif; ?>
        <?php if($_GET["chocolate"] == "on"):?>
            <?php setcookie("chocolate", "set", Time() + 3600);?>
        <?php endif; ?>
        <?php if($_GET["diet"] == "on"):?>
            <?php setcookie("diet", "set", Time() + 3600);?>
        <?php endif; ?>
    <?php setcookie("preferences", "set", Time() + 3600);?>

<?php else: ?>
    <?= "U heeft uw voorkeuren al ingesteld";?>
<?php endif; ?>



</form>
</body>
</html>