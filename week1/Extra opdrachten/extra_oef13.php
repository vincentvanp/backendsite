<?php
/*genereer een 2D array met random op random plaatsen ‘*’, ‘K’ en ‘A’ en druk deze af in de browser.
 Het moet een 3x3 array zijn. Elke waarde heeft ongeveer evenveel kans.
Als er op 1 van de 3 horizontale lijnen 3 dezelfde symbolen staan komt er gewonnen in de browser. */


for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $rng = rand(1, 100);
        if($rng < 33)
            $slotMachine[$i][$j] = "*";
        elseif ($rng <66)
            $slotMachine[$i][$j] = "A";
        else
            $slotMachine[$i][$j] = "K";
    }
}

for ($k = 0; $k < 3; $k++){
    for ($l = 0; $l < 3; $l++){
        echo $slotMachine[$k][$l];
    }
    echo "<br>";
}


for ($m = 0; $m <3; $m++) {
    if (($slotMachine[$m][0] == $slotMachine[$m][1]) && ($slotMachine[$m][1] == $slotMachine[$m][2])) {
        $lineCount = $m + 1;
        echo "Gewonnen op lijn: " . $lineCount . "<br>";
    }
}
