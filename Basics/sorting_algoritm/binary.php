<?php
$array = array(1, 3, 5, 7, 9, 11, 13, 15);
$key = 45;

$left = 0;
$right = count($array) - 1;
$result = 0;

for (; $left <= $right; ) {
    $mid = (int)(($left + $right) / 2);

    if ($array[$mid] == $key) {
        $result = $mid;
        break;
    } elseif ($array[$mid] < $key) {
        $left = $mid + 1;
    } else {
        $right = $mid - 1;
    }
}

if ($result != 0) {
    echo "Value $key found at index $result";
} else {
    echo "Target not found in array.";
}
?>
