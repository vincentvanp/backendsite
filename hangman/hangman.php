<?php
session_start();
$alphas = range('a', 'z');

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
    <?php if(!isset($_COOKIE["name"])): //Check for new user ?>
        <form method="get" action="reset.php">
            <label for="name">Choose a name</label>
                <input type="text" name="name" id="name">
            <button>Send</button>
        </form>


    <?php else: ?>
        <?php if ($_SESSION["done"] == false): ?>
            <h1><?= $_SESSION["hiddenword"] ?></h1>



            <form method="post" action="charCheck.php">
                <label for="letter">Choose a letter:</label>
                <select id="letter" name="letter">
                    <?php foreach ($alphas as $letter): ?>
                        <?php if(!in_array($letter, $_SESSION["guessed"])): ?>
                            <option value="<?= $letter ?>"><?= $letter ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <button>Guess</button>
            </form>



            <form method="post" action="checkWord.php">
                <label for="guessedWord">Type a word:</label>
                <input type="text" name="guessedWord" id="guessedWord">
                <button>Guess</button>
            </form>

            <?php if(($_SESSION["mistakes"] > "0") &&($_SESSION["mistakes"] < "11") ): ?>
                <img src="images\<?= $_SESSION["mistakes"] . ".png" ?>">
            <?php endif; ?>

            <?php if($_SESSION["mistakes"] == "10"): ?>
                <?php $_SESSION["done"] = true; ?>
            <?php endif; ?>


        <?php else: //User done ?>

            <?php if($_SESSION["won"] == true): ?>
                <?php $_SESSION["userScore"]++; ?>
                <h1>You win! Score: <?= $_SESSION["userScore"] ?></h1>
                <form action="reset.php">
                    <button>Play again</button>
                </form>


            <?php else: ?>
                <img src="images\11.png">
                <h1>You lose!</h1>
                <form action="reset.php"><button>Reset</button></form>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php die(); ?>



</body>
</html>