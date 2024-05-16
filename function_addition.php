<?php
function add_five(&$value) {
  $value = $value+5;
}

$num = 45;
add_five($num);
echo $num;
?>