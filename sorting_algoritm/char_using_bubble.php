<?php
$array = array("b", "c", "g", "u", "t", "a");
$n = count($array);
for ($i = 0; $i < $n - 1; $i++) 
{
    for ($j = 0; $j < $n - $i - 1; $j++)
     {
        if ($array[$j] > $array[$j + 1]) 
        {
            $t = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $t;
        }
    }
}
print_r($array);
?>