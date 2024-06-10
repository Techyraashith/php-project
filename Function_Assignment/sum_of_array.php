<?php
function sumarray($x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n = $n+$x[$i];
  }
  return $n;
}

$a = array(10,10,20,20);
echo sumarray($a);
?>