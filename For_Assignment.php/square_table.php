<?php
ini_set('display_errors', '1');
for($i=1;$i<=5;$i++){
     for($j=1;$j<=$i;$j++){
        $j=$i*$i;
        echo "$i&ensp;  $j";
    } 
    echo "<br>";
}
?>