<?php
ini_set('display_errors', '1');

$fruits = array("banana", "apple", "cherry","grapes");
$result = array_shift($fruits);

echo $result;  
echo "<pre>";
print_r($fruits);   
echo "</pre>";
?>
