<html>
    <body>
        <form action="odd_or_even.php" method="POST">
            Number1: <input type="text" name="Number1"value><br>
            Number2: <input type="text" name="Number2"value><br>
            <input type="submit">

        </form>
    </body>
</html>

<?php

    $Number1 = $_POST["Number1"];
    $Number2 = $_POST["Number2"];
    if ($Number1%2==0){
        echo"$Number1 is even<br>";
    }
    else{
        echo"$Number1 is odd<br>";
    }
    if ($Number2%2==0){
        echo"$Number2 is even<br>";
    }
    else{
        echo"$Number2 is odd<br>";
    }

    ?>