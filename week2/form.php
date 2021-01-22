<?php
session_start();


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
    <form action="return.php" method="post">
        <?php if(isset($_SESSION["value"])):?>
            <input type="text" name="string" value="<?php echo $_SESSION["value"]?>">
        <?php else: ?>
            <input type="text" name="string">
        <?php endif;?>
        <button>Send</button>
    </form>
</body>
</html>
