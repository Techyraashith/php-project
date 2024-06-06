<?php
ini_set('display_errors', '1');
$f=$_POST["from"];
$t=$_POST["to"];
for($j=$f;$j<=$t;$j++){
for($i=1;$i<=10;$i++){
   $n=$i*$j;
   echo "$i X $j = $n<br>";
}
    echo"<br>";
}
?>
<html>
    <body>
        <form action="table.php" method="POST">
            from : <input type="text" name="from" value>
            to : <input type="text" name="to" value>
            <input type="submit"> 
        </form>
    </body>
</html>