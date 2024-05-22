<html>
    <body>
        <form action="ASCII.php" method="POST"><br>
    character : <input type="text" name="character" value><br>
    <input type="submit">
    </form>
    </body>
</html>

<?php
$char=$_POST["character"];
$ascii_value=ord($char);
echo "The ASCII value of $char is $ascii_value";
?>