<?php
/*Bereid Opdracht 7 uit met een formulier. Dat formulier wordt verzonden naar de pagina zelf en daarin zullen
de mensen kunnen kiezen met een dropdown uit de opties die in de array zitten. Je hoeft dus niet manueel
nog GET parameters aan te passen als gebruiker.

De options van de select worden aangevuld op basis van de mogelijke opties uit de originele array
Als er een parameter in de url is meegegeven moet in de select deze waarde standaard zijn geselecteerd.
 */

session_start();

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

$brands = array_column($cars, "Brand");
$uniqueBrands = array_unique($brands);

$models = array_column($cars, "Model");
$uniqueModels = array_unique($models);

$colors = array_column($cars, "Color");
$uniqueColors = array_unique($colors);

if($_GET["Brand"] != "null"){
    $firstFilteredArr = filterArray($cars, "Brand", $_GET["Brand"]);
}

else{
    $firstFilteredArr = $cars;
}

if($_GET["Model"] != "null"){
    $secondFilteredArr = filterArray($firstFilteredArr, "Model", $_GET["Model"]);
}

else{
    $secondFilteredArr = $firstFilteredArr;
}

if($_GET["Color"] != "null"){
    $thirdFilteredArr = filterArray($secondFilteredArr, "Color", $_GET["Color"]);
}

else{
    $thirdFilteredArr = $secondFilteredArr;
}


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
<form method="get">
    <label for="Brand">Choose a brand:</label>
    <select id="Brand" name="Brand">
        <option value="null"></option>
        <?php foreach ($uniqueBrands as $car): ?>
            <option selected value="<?= $car ?>"><?= $car ?></option>
        <?php endforeach; ?>
    </select>

    <label for="Model">Choose a model:</label>
    <select id="Model" name="Model">
        <option value="null"></option>
        <?php foreach ($uniqueModels as $car): ?>
            <option value="<?= $car ?>"><?= $car ?></option>
        <?php endforeach; ?>
    </select>

    <label for="Color">Choose a brand:</label>
    <select id="Color" name="Color">
        <option value="null"></option>
        <?php foreach ($uniqueColors as $car): ?>
            <option selected value="<?= $car ?>"><?= $car ?></option>
        <?php endforeach; ?>
    </select>

    <button>Send</button>
</form>


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
    <?php die; ?>
</ul>

</body>
</html>
