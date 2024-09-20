<?php
ini_set('display_errors', '1');
function CakeCandles($candles){
    $maxheight = max($candles);
    $n = count($candles);
    $tallestcandle = 0;

    for($i=0;$i<=$n;$i++){
        if($candles[$i] == $maxheight)
        {
            $tallestcandle++;
        }
    }

    return $tallestcandle;
}

$n = 4;
$candles = [3,2,1,3];

CakeCandles($candles); 

?>