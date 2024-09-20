<?php
$array = array(21,10,9,15,20,7,4,3,2);
$count = count($array);
$max = $array[0];

for($i=0;$i<=$count;$i++){
    if($max<$array[$i]){
        $max = $array[$i];
    }
}

echo $max;
?>