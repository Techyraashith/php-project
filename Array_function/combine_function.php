<?php
$names = array("Raashith","Rameez","Rashika","Rafiq");
$age = array("19","14","11","5");

$family = array_combine($names,$age);
echo "<pre>";
print_r($family);
echo "</pre>";

?>