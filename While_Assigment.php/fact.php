<?php
$f=1;
$n=$_POST["number"];
$i=1;
while($i<=$n){
    $f=$i*$f;
    echo"i = $i&ensp;  f = $f";
    echo"<br>";
    $i++;
}
?>

<html>
    <body>
        <form action="fact.php" method = "POST">
            number : <input type="text" name ="number" value>
            <input type="submit">
        </form>
    </body>
</html>