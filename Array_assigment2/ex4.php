<?php
ini_set('display_errors', '1');
$a = array("a"=>array("b"=>0,"c"=>1),"b"=>array("e"=>2,"o"=>array("b"=>3)));
echo"<pre>";
print_r($a);
echo"</pre>";
echo $a["b"]["o"]["b"];

?>