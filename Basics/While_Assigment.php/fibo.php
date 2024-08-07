<?php
ini_set('display_errors', '1');
$num=$_POST["number"];
$n=0;
$j=1;
$i=1;
while($i<=$num){
    $k=$n;
    $n=$j;
    $j=$k+$n;
    echo "$j<br>";
    $i++;
}
?>
<html>
    <body>
        <form action="fibo.php" method="POST">
            number : <input type="text" name="number"value>
            <input type="submit">
        </form>
    </body>
</html>