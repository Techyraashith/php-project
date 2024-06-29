<?php
$array = array(92, 24, 160, 55, 12, 27);
$n = count($array);

echo "Unsorted array:";
print_r($array);

for ($i = 0; $i < $n - 1; $i++) 
{
    for ($j = 0; $j < $n - $i - 1; $j++)
     {
        if ($array[$j] < $array[$j + 1]) 
        {
            $t = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $t;
        }
    }
}

echo "Sorted array:";
print_r($array);
?>
