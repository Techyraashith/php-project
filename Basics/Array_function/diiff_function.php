<?php
$a = array("a"=>"dog","b"=>"cat","c"=>"rabbit","d"=>"fish");
$b = array("a"=>"dog","f"=>"cat","c"=>"rabbit");
$c = array("a"=>"dog","c"=>"rabbit");
$diff = array_diff_assoc($a,$b,$c);
echo"<pre>";
print_r($diff);
echo"</pre>"; 
?>