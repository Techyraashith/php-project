<?php
$n = $_POST["Number"];
echo str_repeat("Welcome all<br>",$n);
?>
<html>
    <body>
        <form action="repeat.php" method="POST">
            Number : <input type="text" name = "Number" value><br>
            <input type="submit">
        </form>
    </body>
</html>
