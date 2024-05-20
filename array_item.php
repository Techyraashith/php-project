<?php  
function myFunction() {
  echo " Call Me";
}

$a = array("Volvo", 15, ["apples", "bananas"], myFunction);
$a[3]();
?>  