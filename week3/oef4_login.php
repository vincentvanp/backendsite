<?php
session_start();

try{
    $connection = new PDO('mysql:host=localhost;dbname=login_oef4', 'root', 'root');
} catch (Exception $exception){
    echo $exception->getMessage();
}

if(isset($_POST["user"]) && isset($_POST["pass"])){
    $getPassStatement = $connection->prepare('SELECT password, salt FROM users WHERE username = :user');
    $getPassStatement -> bindParam("user", $_POST["user"]);
    $getPassStatement -> execute();
    $getPassStatement -> setFetchMode(PDO::FETCH_ASSOC);
    $pass = $getPassStatement -> fetchAll();
    $salted = $_POST["pass"].$pass[0]["salt"];

    if(password_verify($salted, $pass[0]["password"])){
        $_SESSION["user"] = $_POST['user'];
        header('location: oef4_dash.php');
    }
    else{
        $_SESSION["wrong"] = true;
        header('location: oef4.php');
    }

}
else{
    header('location: oef4.php');
}
