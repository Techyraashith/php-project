<?php
ini_set('display_errors', '1');
$a = array("a"=>"apple","b"=>"banana","c"=>"watermilon");
$b = array("o"=>"orange","a"=>"apple","c"=>"watermilon");

$fruits = array_intersect_assoc($a,$b);

echo"<pre>";
print_r($fruits);
echo"</pre>";
?>
