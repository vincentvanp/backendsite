<?php
session_start();

function endFunc($str, $lastString) {
    $count = strlen($lastString);
    if ($count == 0) {
        return true;
    }
    elseif(substr($str, -$count) === $lastString){
        return true;
    }
    else{
        return false;
    }
}




if(isset($_POST["email"]) && endFunc($_POST["email"], "@kdg.be")){
    $_SESSION["email"] = $_POST["email"];
}
else{
    $_SESSION["email"] = "error";
}

header("location: oef10.php");

?>