<?php
$a=array("a"=>"a","b"=>"b","c"=>"c","d"=>"d");
echo"<pre>";
print_r($a);
echo"</pre>";

foreach($a as $key => $value){
 echo"''$key'' => ''$value''<br>";
 
 }


?>