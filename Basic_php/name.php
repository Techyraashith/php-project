
<?php
function Family($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."<h1>Hi,$firstname[$i] $lastname</h1>.<br>";
  }
  return $txt;
}

$a = Family("Moidheen", "Idhayathullah", "Kadar Meeran", "Rahmathullah");
echo $a;
?>
