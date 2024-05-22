<html>
    <body>
        <form action="sum_of_n_numbers.php" method="POST">
        Number: <input type="text" name="Number" value><br>

            <input type="submit">
        </form>
    </body>
</html>


<?php
$n=$_POST["Number"];
$sum=0;
for($i=1;$i<=$n;$i++)
{
    $sum+=$i;
}
echo"The Sum of n Number is $sum";
?>
