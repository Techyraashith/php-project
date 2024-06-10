<?php
function Multiple($var1,$var2){
    $var3 = $var1*$var2;
    return $var3;
}
$n1 = $_POST["number1"];
$n2 = $_POST["number2"];
echo"The sum of given no is:".Multiple($n1,$n2);
?>

<html>
    <body>
        <form action="product_of_2no.php" method = "POST">
            number1 : <input type="text" name="number1" value><br>
            number2 : <input type="text" name="number2" value><br>
            <input type="submit">

        </form>
    </body>
</html>