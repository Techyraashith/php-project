<?php
$Array = array(64, 25, 12, 22, 11);
print_r($Array);
$n = count($Array);

for ($i = 0; $i < $n - 1; $i++) 
{
    $min = $i;
    for ($j = $i + 1; $j < $n; $j++) 
    {
        if ($Array[$j] < $Array[$min]) {
            $min = $j;
        }
    }
    if ($min != $i) 
    {
        $t = $Array[$i];
        $Array[$i] = $Array[$min];
        $Array[$min] = $t;
    }
}

echo "Sorted array: ";
print_r($Array);
?>
