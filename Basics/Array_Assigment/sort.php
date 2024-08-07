<?php
$names=array("John","Alice","BOb");
sort($names);
$n=count($names);
for($i=0;$i<=$n;$i++){
    echo $names[$i];
    echo"<br>";
}

?>