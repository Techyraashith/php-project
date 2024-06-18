<?php
ini_set('display_errors', '1');
$from = $_POST["from"];
$to = $_POST["to"]; 
/* $from = 2;
$to = 10; */
echo "<h1>$from tet</h1>";
echo "<h1>$to test</h1>";
$i=$from;
while($i<=$to){
    $j=1;
    while($j<=10){
        $n=$j*$i;
        echo"$j X $i = $n<br>";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
<html>
    <body>
        <form action="tables.php" method="POST">
            from : <input type="text" name="from" value>
            to : <input type="text" name="to" value>
            <input type="submit"> 
        </form>
    </body>
</html>