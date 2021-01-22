<?php
session_start();

$_SESSION["value"] = $_POST["string"];

echo $_SESSION["value"];

die;