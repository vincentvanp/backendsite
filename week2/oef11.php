<?php
/*Maak eens scriptje dat op basis van een cookie
kan onthouden of een gebruiker dit script al bezocht heeft of niet.

Als de gebruiker de pagina voor de eerste keer bezoekt toon je:
 "Welkom nieuwe gebruiker" anders toon je: "Welkom terugkerende gebruiker".*/


if(isset($_COOKIE["my_cookie"])){
    echo "Welkom terugkerende gebruiker.";
}

else{
    setcookie('my_cookie', 'hello', Time() + 3600);
    echo "Welkom nieuwe gebruiker.";
}
