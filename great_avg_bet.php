<?php
ini_set('display_errors', '1');
$a = $_POST["Number1"];
$b = $_POST["Number2"];
$c=6.5;

if($a+$b/2>=c){
    echo "YES";
} 
else{
    echo "NO";
}
?>
<html>
    <body>
        <form action="great_avg_bet.php" method="POST">
            Number1 : <input type="text" name="Number1" value><br>
            Number2 : <input type="text" name="Number2" value><br>
            <input type="submit">
        </form>
    </body>
</html>