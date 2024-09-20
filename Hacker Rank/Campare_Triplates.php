<?php
function CompareTriplets($a, $b) {

    $Alice = 0;
    $Bob = 0;
    for($i=0;$i<=2;$i++){
        if($a[$i] > $b[$i]){
            $Alice++;
        }
        
        else if($a[$i] < $b[$i]){
            $Bob++;
        }
    }
    
    return [$Alice,$Bob]; 
}
$a=[5,6,7];
$b=[3,6,10];
echo "<pre>";
Print_r(CompareTriplets($a, $b));
echo "</pre>";
?>