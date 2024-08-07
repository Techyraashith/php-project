<?php
$s = $_POST["String"];
$a = strlen($s);
echo "The Given String lenght is:$a";
?>
<html>
    <body>
        <form action="lenght.php" method ="POST">
            String : <input type="text" name="String" value><br>
            <input type="submit">
        </form>
    </body>
</html>
