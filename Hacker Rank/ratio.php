<?php
function PlusMinus($arr) {
    // Write your code here
    
    $total = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
     
    for($i=0;$i<$total;$i++){
        if($arr[$i] > 0){
            $positive++;
        }
        
        if($arr[$i] < 0){
            $negative++;
        }
        
        if($arr[$i]==0){
            $zero++;
        }
    }
    
    $pratio = $positive / $total;
    $nratio = $negative / $total;
    $zratio = $zero / $total;
    
    echo $pratio."<br>";
    echo $nratio."<br>";
    echo $zratio."<br>";
}
$array = [2,3,4,-1,-8,0];
$total = 6;

PlusMinus($array);
?>