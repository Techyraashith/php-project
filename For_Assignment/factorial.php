<?php
$f=1;
$n=$_POST["number"];
for($i=1;$i<=$n;$i++){
    echo"f=$f . i=$i<br>";
    echo"<br>";
    $f=$f*$i;
    echo"f=$f<br>";
    echo"<br>";
} 



?>

<html>
    <body>
        <form action="factorial.php" method="POST">
            number : <input type="text" name="number"value>
            <input type="submit">
        </form>
    </body>
</html>