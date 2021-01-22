<?php
session_start();

$_SESSION["value"] = $_POST["string"];

header("location: form.php");

?>
