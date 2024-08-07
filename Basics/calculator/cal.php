<?php
echo "<h3>Simple Calculator</h3><br>";
if($_POST['Cal']){

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$answ = $_POST['Cal'];

if($answ == "+"){
    $res = $num1+$num2;
}
else if($answ == "-"){
    $res = $num1-$num2;
}
else if($answ == "x"){
    $res = $num1*$num2;
}
else {
    $res = $num1/$num2;
}
}
?>


<html>
    <body>
        <form action="" method="POST"><br>
               <h3> Number 1 : <input type="text" name="num1" value><br><br>
                Number 2 : <input type="text" name="num2" value><br><br>
                Result   : <input type="text" name="res"  value="<?php echo $res?>"><br><br>
</h3>               <h2><input type="submit" name="Cal" value="+">
                <input type="submit" name="Cal" value="-">
                <input type="submit" name="Cal" value="x">
                <input type="submit" name="Cal" value="/">
</h2> </form>
    </body>
</html>