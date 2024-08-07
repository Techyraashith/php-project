<html>
    <body>
        <form action="area_of_Trapizoid.php" method="POST">
            base1: <input type="text" name="base1" value><br>
            base2: <input type="text" name="base2" value><br>
            height: <input type="text" name="height" value><br>
            <input type="submit">

        </form>
    </body>
</html>

<?php
    $base1 = $_POST["base1"];
    $base2 = $_POST["base2"];
    $height = $_POST["height"];
    $area = $base1 + $base2/2 * $height;
    echo "The Area of Trapizoid is: $area";
?>