<?php
session_start();

try{
    $connection = new PDO('mysql:host=ID211210_blogopdracht.db.webhosting.be;dbname=ID211210_blogopdracht', 'ID211210_blogopdracht', 'Wachtwoord123');
} catch (Exception $exception){
    echo $exception->getMessage();
}

if(isset($_POST['email']) && isset($_POST["pass"])) {
    $getPassStatement = $connection->prepare('SELECT password, salt FROM users WHERE email = :email');
    $getPassStatement->bindParam(":email", $_POST['email']);
    $getPassStatement->execute();
    $getPassStatement->setFetchMode(PDO::FETCH_ASSOC);
    $pass = $getPassStatement->fetchAll();
    $salted = $_POST["pass"] . $pass[0]["salt"];

    if(password_verify($salted, $pass[0]['password'])){
        $sessionId = uniqid();
        $generateSes = $connection->prepare ('UPDATE `users` SET `session_id`= :sessionId WHERE email = :email');
        $generateSes->bindParam(":email", $_POST['email']);
        $generateSes ->bindParam(':sessionId', $sessionId);
        $generateSes ->execute();
        setcookie('auth', $sessionId);
        header('location: blog.php');
    }
    else{
        $_SESSION["wrong"] = true;
        header('location: blog.php');
    }

}
else{
    header('location: blog.php');
}