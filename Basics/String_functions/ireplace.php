<?php
$colors = array("Red","Blue","Yellow","White","Perpole");
echo "<pre>";
echo "<b>Before</b><br>";
print_r($colors);
echo "<br>";
echo "<b>After</b><br>";
print_r(str_ireplace("Red","Black",$colors));
echo "</pre>";
?>