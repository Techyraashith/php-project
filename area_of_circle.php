<html>
    <body>
        <form action="area_of_circle.php" method="POST">
            Radius : <input type="text" name="Radius" value><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
ini_set('display_errors', '1');
$r=$_POST["Radius"];
$pi=3.14;
$area = $pi*$r*$r;
echo"The area of circle is:$area";
?>