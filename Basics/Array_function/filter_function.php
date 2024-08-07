<?php
function positive($num){
    return ($num > 0);
}

$a = array(1,2,-3,4,-5,6,-8,0,-1);
$pos = array_filter($a,"positive");
echo"<pre>";
print_r($pos);
echo"</pre>";
?>