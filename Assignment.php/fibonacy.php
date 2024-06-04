<?php
$f=$_POST["number"];
$n=0;
$j=1;
echo"k=n<br>n=j<br>j=k+n";
echo"<br><br>";
for($i=0;$i<=$f;$i++){
    echo"K=$k . N=$n . J=$j<br>";
    $k=$n;
    $n=$j;
    $j=$k+$n;
    echo"<br>";
}
?>
<html>
    <body>
        <form action="fibonacy.php" method="POST">
            number : <input type="text" name="number" value>
            <input type="submit">
        </form>
    </body>
</html>