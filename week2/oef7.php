<?php
/*’Een scriptje dat een HTML pagina opbouwt met daarin een list die wordt opgebouwd op basis van een PHP array.

Die PHP array is multidimensionaal en bevat voor elke item volgende eigenschappen: Merk,Kleur,Model.

De HTML lijst kan gefilterd worden met behulp van GET parameters. (Merk,Model,Kleur). Dus als de parameter waarde van Merk
bvb: "Mercedes" is zullen in de HTML lijst enkel items met merk "Mercedes" worden getoond. Idem voor de andere parameters.

Heel lang mee bezig geweest ==> ronde haakjes ipv vierkante gebruikt
*/


function filterArray($array, $key, $value){
    for($i = 0; $i <= count($array); $i++){
        if($array[$i][$key] == $value){
            $returnArray[] = ["Brand" => $array[$i]["Brand"], "Model" => $array[$i]["Model"], "Color" => $array[$i]["Color"]];
        }
    }
    return $returnArray;
}

$cars = [
        ["Brand" => "Mercedes", "Model" =>"A", "Color" => "Rood"],
        ["Brand" => "Mercedes", "Model" => "C", "Color" => "Zwart"],
        ["Brand" => "Mercedes", "Model" => "A", "Color" => "Grijs"],
        ["Brand" => "BMW", "Model" => "4", "Color" => "Zwart"],
        ["Brand" => "BMW", "Model" => "1", "Color" => "Rood"],
        ["Brand" => "Audi", "Model" => "A4", "Color" => "Grijs"],
        ["Brand" => "Audi", "Model" => "A1", "Color" => "Blauw"],
        ["Brand" => "Audi", "Model" => "A3", "Color" => "Rood"],
        ["Brand" => "Volvo", "Model" => "V40", "Color" => "Blauw"],
        ["Brand" => "Volvo", "Model" => "V40", "Color" => "Zwart"],
        ["Brand" => "Volvo", "Model" => "V60", "Color" => "Blauw"]
];

if(isset($_GET["Brand"])){
    $firstFilteredArr = filterArray($cars, "Brand", $_GET["Brand"]);
}

else{
    $firstFilteredArr = $cars;
}

if(isset($_GET["Model"])){
    $secondFilteredArr = filterArray($firstFilteredArr, "Model", $_GET["Model"]);
}

else{
    $secondFilteredArr = $firstFilteredArr;
}

if(isset($_GET["Color"])){
    $thirdFilteredArr = filterArray($secondFilteredArr, "Color", $_GET["Color"]);
}

else{
    $thirdFilteredArr = $secondFilteredArr;
}’

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
    <ul>
        <?php if(count($_GET) == 0): ?>
            <?php foreach ($cars as $car): ?>
                <li><?= $car["Brand"] . " " . $car["Model"] . " " . $car["Color"] ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($thirdFilteredArr as $filteredCar): ?>
                <li><?= $filteredCar["Brand"] . " " . $filteredCar["Model"] . " " . $filteredCar["Color"] ?></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>


