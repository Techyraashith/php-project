<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "<pre>";
print_r(array_change_key_case($age,CASE_UPPER));
echo "</pre>";
?>