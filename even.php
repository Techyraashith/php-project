<html>
    <body>
        <form action="even.php" method="POST">
            Number : <input type="text" name="Number" value><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
$num=$_POST["Number"];
echo "<h1>The Number is:</h1>";
    for ($i = 1; $i <= $num; $i++)
        {
            if($i%2==0)
            echo "$i <br>";
        }
        ?>