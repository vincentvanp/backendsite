<?php

/* Voor elke serie de verschillende quoteringen
   Voor elke serie de mensen die ze hebben gekeken.
   Het aantal series per streamingdienst
   Het aantal films per streamingdienst */

try{
    $connection = new PDO('mysql:host=localhost;dbname=streamingservice', 'root', 'root');
} catch (Exception $exception){
    echo $exception->getMessage();
}



$quotationsState = $connection -> prepare("SELECT shows.title, friends_shows_link.rating FROM shows INNER JOIN friends_shows_link ON shows.id = friends_shows_link.show_id");
$showsAndPeopleState = $connection -> prepare("SELECT shows.title, friends_shows_link.friend_id FROM shows INNER JOIN friends_shows_link ON shows.id = friends_shows_link.show_id");
$showCountState = $connection -> prepare("SELECT streamingservices.name, COUNT(shows.title) FROM streamingservices INNER JOIN shows ON streamingservices.id = shows.streamingservice_id GROUP BY streamingservices.name");
$movieCountState = $connection -> prepare("SELECT streamingservices.name, COUNT(movies.title) FROM streamingservices INNER JOIN movies ON streamingservices.id = movies.streamingservice_id GROUP BY streamingservices.name");

$quotationsState -> execute();
$showsAndPeopleState -> execute();
$showCountState -> execute();
$movieCountState -> execute();

$quotationsState -> setFetchMode(PDO::FETCH_ASSOC);
$showsAndPeopleState -> setFetchMode(PDO::FETCH_ASSOC);
$showCountState -> setFetchMode(PDO::FETCH_ASSOC);
$movieCountState -> setFetchMode(PDO::FETCH_ASSOC);

$quotations = $quotationsState -> fetchAll();
$showsAndPeople = $showsAndPeopleState -> fetchAll();
$showCount = $showCountState -> fetchAll();
$movieCount = $movieCountState -> fetchAll();


echo '<pre>';
var_dump($quotations);
var_dump($showsAndPeople);
var_dump($showCount);
var_dump($movieCount);
echo '</pre>';
