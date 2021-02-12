<?php
session_start();
try{
    $connection = new PDO('mysql:host=ID211210_blogopdracht.db.webhosting.be;dbname=ID211210_blogopdracht', 'ID211210_blogopdracht', 'Wachtwoord123');
} catch (Exception $exception){
    echo $exception->getMessage();
}




//email checken
$getUsers = $connection->prepare('SELECT * FROM users WHERE email = :email');
$getUsers -> bindParam('email', $_POST['email']);
$getUsers -> execute();
$getUsers -> setFetchMode(PDO::FETCH_ASSOC);
$user = $getUsers -> fetchAll();



if(count($user) != '0'){
    $_SESSION['emailExists'] = true;
    header('location: register.php');
}
else{
    //generate pass and salt
    $salt = uniqid();
    $salted = $_POST['pass'] . $salt;
    $hash = password_hash($salted, PASSWORD_DEFAULT);

    //register user
    $registerUser = $connection->prepare('INSERT INTO `users`(`first_name`, `last_name`, `gender`, `password`, `salt`, `email`, `session_id`) VALUES (:firstname,:lastname,:gender,:passw,:salt,:email, null )');
    $registerUser -> bindParam(':firstname',$_POST['firstname']);
    $registerUser -> bindParam(':lastname',$_POST['lastname']);
    $registerUser -> bindParam(':gender',$_POST['gender']);
    $registerUser -> bindParam(':email', $_POST['email']);
    $registerUser -> bindParam(':passw',$hash);
    $registerUser -> bindParam(':salt',$salt);
    $registerUser -> execute();
    $_SESSION["registered"] = true;
    header('location: blog.php');
}
