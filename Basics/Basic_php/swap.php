<html>
    <body>
        <center>
        <form action="swap.php" method="POST">
           <h2> Number1 : <input type="text" name=Number1 value></h2><br>
            <h2>Number2 : <input type="text" name=Number2 value></h2><br>
            <h3><input type="submit"></h3>
        </form>
        </center>
    </body>
</html>
<center>
<?php
$a=$_POST["Number1"];
$b=$_POST["Number2"];

$c=$a;
$a=$b;
$b=$c;

echo"<h1>After Swapping a is $a</h1>";
echo"<br>";
echo"<h1>After Swapping b is $b</h1>";
?>
</center>