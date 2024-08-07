<?php
$i=1;
$sum=0;
ini_set('display_errors', '1');
while($i<=100){

    $sum=$sum+$i;
    $i++;
}
echo $sum;
?>