<html>
    <body>
        <form action="area_of_rectangle.php" method="POST">
            length: <input type="text" name="lenght"value><br>
            breath: <input type="text" name="breath"value><br>
            <input type="submit">

        </form>
    </body>
</html>


<?php
$length = $_POST["length"];
$breath = $_POST["breath"];
$area = $length*$breath;
echo "The area of Rectangle is: $area";
?>