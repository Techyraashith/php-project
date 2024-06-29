<?php
$Array = array(34, 29, 11, 242, 91);
$n = count($Array);
for ($i = 0; $i < $n - 1; $i++) 
{
    $min = $i;
    for ($j = $i + 1; $j < $n; $j++) 
    {
        if ($Array[$j] > $Array[$min]) {
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
print_r($Array);
?>
