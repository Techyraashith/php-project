<?php
ini_set('display_errors', '1');
$i=1;
while($i<=5){
    $j=1;
    while($j<=10){
        if($j%2==0){
            echo "$j&nbsp;" ;
        }
        $j++;
    }
    echo "<br>";
    $i++;
}


?>