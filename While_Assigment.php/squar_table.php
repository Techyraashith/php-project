<?php
$i=1;
while($i<=5){
    $j=1;
    while($j<=$i){
        $j=$i*$i;
        echo "$i&ensp;  $j";
        $j++;
    }
    echo"<br>";
    $i++;
}

?>