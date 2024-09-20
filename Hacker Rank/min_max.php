<?php
ini_set('display_errors', '1');
function MinMax($array){
    $total = count($array);
    $min = 0;
    $max = 0;
    $small = min($array);
    $large = max($array);
    for($i=0;$i<=$total;$i++){
        
        $max = $max + $array[$i];
        
    }
    for($i=0;$i<=$total;$i++){
        
        $min = $min + $array[$i];
    }
    $min = $min - $large;
    $max = $max - $small;
    echo $min." ".$max;
}

$array = [7,69,2,221,8974];
#echo max($array);
MinMax($array);

?>