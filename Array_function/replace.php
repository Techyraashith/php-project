<?php
$a = array("a"=>"hello","b"=>"hi","c"=>"hey there!");
$b = array("a"=>"Good Morning","c"=>"Have a nice day");

echo"<pre>";
print_r(array_replace($a,$b));
echo"</pre>";
?>