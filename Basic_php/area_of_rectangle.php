<html>
    <body>
        <form action="area_of_rectangle.php" method="POST">
            length: <input type="text" name="length" value><br>
            breath: <input type="text" name="breath" value><br>
            <input type="submit">

        </form>
    </body>
</html>


<?php
ini_set('display_errors', '1');

$len = $_POST["length"];
$bre = $_POST["breath"];
$area = $len*$bre;
echo "The area of Rectangle is: $area";
?>