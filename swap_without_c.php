<html>
    <body>
        <form action="swap_without_c.php"method="POST">
            Number1: <input type="text"name="Number1"value><br>
            Number2: <input type="text"name="Number2"value><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
$a=$_POST["a"];
$b=$_POST["b"];

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo"<h1>After Swapping a is $a</h1>";
echo"<br>";
echo"<h1>After Swapping b is $b</h1>";
?>