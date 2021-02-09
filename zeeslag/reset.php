<?php
session_start();

$_SESSION["won"] = false;
unset($_SESSION["guessed"]);
$_SESSION["reply"] = "0";


header("location: index.php");
