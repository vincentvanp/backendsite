<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=games', 'root', 'root');
} catch (Exception $exception){
    echo $exception->getMessage();
}


if($_GET["titleSort"] != '' && $_GET["ratingSort"] != ''){
    $statement = "SELECT * FROM games ORDER BY title " . $_GET["titleSort"] . " ,rating " . $_GET["ratingSort"];
}
elseif($_GET["titleSort"] == "ASC" || $_GET["titleSort"] == "DESC"){
    $statement = "SELECT * FROM games ORDER BY title " . $_GET["titleSort"];
}
elseif($_GET["ratingSort"] == "ASC" || $_GET["ratingSort"] == "DESC"){
    $statement = "SELECT * FROM games ORDER BY rating " . $_GET["ratingSort"];
}
else{
    $statement = "SELECT * FROM games ORDER BY id ASC";
}


$gamesListState = $connection->prepare($statement);
$gamesListState -> execute();
$gamesListState -> setFetchMode(PDO::FETCH_ASSOC);
$gamesList = $gamesListState -> fetchAll();

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

    <form method="get">
        <label for="titleSort">Sort by title :</label>
        <select id="titleSort" name="titleSort">
            <option></option>
            <option name="ASC">ASC</option>
            <option id="DESC">DESC</option>
        </select>

        <label for="ratingSort">Sort by rating :</label>
        <select id="ratingSort" name="ratingSort">
            <option></option>
            <option id="ASC">ASC</option>
            <option id="DESC">DESC</option>
        </select>

        <button onclick="window.location.reload();">Sort</button>
    </form>

    <ul>
        <?php foreach ($gamesList as $game): ?>
            <li><?= $game['title'] . " Rating: " . $game['rating'] . "/10" ?></li>
        <?php endforeach; ?>
    </ul>


    <form method="post" action="oef3_addgame.php">
        <label for="title">Title of game:</label>
        <input type="text" name="title" id="title">

        <label for="rating">Rating :</label>
        <select id="rating" name="rating">
            <?php for ($i = 1; $i <= 10; $i ++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <button>Add game</button>
    </form>

</body>
</html>