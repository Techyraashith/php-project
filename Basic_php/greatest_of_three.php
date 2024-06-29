<html>
    <body>
        <form action="greatest_of_three.php" method="POST">
            Number1 : <input type="text" name="Number1" value><br>
            Number2 : <input type="text" name="Number2" value><br>
            Number3 : <input type="text" name="Number3" value><br>
            <input type="submit">

        </form>
    </body>
</html>
<pre>
<?php
ini_set('display_errors', '1');
print_r($_POST);
$num1 = $_POST["Number1"];
$num2 = $_POST["Number2"];
$num3 = $_POST["Number3"];

if($num1>$num2 && $num1>$num3){
    echo"Number1 is greater:$num1";
} 
elseif($num2>$num1 && $num2>$num3){
    echo"Number2 is greater:$num2";
}
else{
    echo"Number3 is greater:$num3";
}
?>
</pre>