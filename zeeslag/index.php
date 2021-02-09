<?php
session_start();
$alphas = range('a', 'j');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zeeslag</title>
</head>
<body>
    <?php if(isset($_SESSION["won"]) && ($_SESSION["won"] == true)): ?>
        <h1><?= "Congratulations, you won after " . count($_SESSION["guessed"]) . " guesses."?></h1>
    <form action="reset.php"><button>Restart</button></form>




    <?php else: ?>
        <table>
            <?php foreach ($alphas as $char): ?>
                <tr>
                    <?php for($i='1'; $i < '11'; $i++): ?>
                        <?php $coord = $char . $i ?>
                        <?php if((in_array($coord, $_SESSION["guessed"])) && (in_array($coord, $_SESSION["ships"])) ): ?>
                            <td id="<?= $coord; ?>" bgcolor="#228b22"><?= $coord; ?></td>
                        <?php elseif((in_array($coord, $_SESSION["guessed"])) && !(in_array($coord, $_SESSION["ships"])) ): ?>
                            <td id="<?= $coord; ?>" bgcolor="#dc143c"><?= $coord; ?></td>
                        <?php else: ?>
                            <td id="<?= $coord; ?>"><?= $coord; ?></td>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </table>


        <?php if($_SESSION["reply"] == 1): ?>
            <h1> Miss </h1>
        <?php elseif ($_SESSION["reply"] == 2): ?>
            <h1> Hit </h1>
        <?php elseif ($_SESSION["reply"] == 3): ?>
            <h1> Already guessed </h1>
        <?php endif; ?>

        <form method="post" action="shoot.php">
            <label for="letter">Choose a letter:</label>
            <select id="letter" name="letter">
                <?php foreach ($alphas as $letter): ?>
                    <option value="<?= $letter ?>"><?= $letter ?></option>
                <?php endforeach; ?>
            </select>

            <label for="number">Choose a number:</label>
            <select id="number" name="number">
                <?php for ($i = 1; $i < 11; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
            <button>Guess</button>
        </form>
        <form action="reset.php"><button>Restart</button></form>
    <?php endif;?>

</body>
</html>
