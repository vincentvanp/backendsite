
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
<center>
    <?php for($i = 0; $i <= 5; $i++): ?>
        <p>
    <?php for($j = 0; $j < $i; $j++): ?>
        *
    <?php endfor;?>
        </p>
    <?php endfor;?>
</center>
</body>
</html>