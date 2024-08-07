<?php
$array = array(34, 45, 55, 63, 77, 70, 100);
$search = readline("Enter the Key Value:");
$n = count($array);

for($i=0;$i<$n;$i++){

    if($array[$i] == $search){
        echo $array[$i]." is key value found in The array";
        break;
    }
}

if($i==$n){
    echo"Key value is Not founded";
}

?>