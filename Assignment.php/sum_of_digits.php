<?php
ini_set('display_errors', '1');
$n=$_POST["number"];
$d = count($n);
$sum=0;
for($i=0;$i<=$d;$i++){
    $sum=$sum+$d;
}
echo $sum;
?>
<html>
    <body>
        <form action="sum_of_digits.php" method="POST">
            number : <input type="text" name="number" value>
            <input type="submit">
        </form>
    </body>
</html>