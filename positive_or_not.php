<html>
    <body>
        <form action="positive_or_not.php" method="POST">
        Number: <input type="text"name="Number"value><br>

            <input type="submit">
        </form>
    </body>
</html>



<?php
$Number = $_POST["Number"];
if ($n>0) {
echo"<h1>The Number is Positive</h1>";

}

else{
    echo"<h1>Please enter the Valid no</h1>";

}

?>