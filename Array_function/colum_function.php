<?php
$a = array(array("Os"=>"windows","Modle"=>"11"),
array("Os"=>"Linux","Modle"=>"20.23"),
array("Os"=>"Zorin","Modle"=>"20.40"));
echo"<pre>";
print_r($a);

$modle = array_column($a,"Os");
print_r($modle);
echo"</pre>";
?>