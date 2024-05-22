<html>
    <body>
        <form action="odd.php" method="POST">
            Number : <input type="text" name="Number" value><br>
            <input type="submit">

        </form>
    </body>
</html>

<?php
$num = $_POST["Number"];
echo"The Numbers are:<br>";

    for ($i = 1; $i <= $num; $i++)
        {
            if($i%2!=0)
            echo "$i <br>";
        }
        ?>