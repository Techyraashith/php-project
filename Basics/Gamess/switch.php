<?php
$Gun = readline("Give a Coin :");

switch ($Gun) {
    case "1000":
        echo "You Got M4A1";
        break;
    case "2000":
        echo "You Got M1014";
        break;
    case "3000":
        echo "You Got AK47";
        break;
    case "4000":
        echo "You Got M416";
        break;
    case "5000":
        echo "You Got SPAZE12";
        break;
    default:
        echo "Give a Coin And get your Gun.";
        break;
}
?>