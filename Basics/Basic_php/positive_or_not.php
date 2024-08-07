<html>
    <body>
        <form action="positive_or_not.php" method="POST">
        Number: <input type="text" name="Number" value><br>

            <input type="submit">
        </form>
    </body>
</html>



<?php

#error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');



print_r($_POST);
$number = $_POST["Number"];

if ($number>0) {
echo"<h1>The Number is Positive</h1>";

}

else{
    echo"<h1>Please enter the Valid no</h1>";

}

?>