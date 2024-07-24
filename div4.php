<?php
echo "<table border=1>";
echo "<tr>";
for($i=1;$i<=100;$i++)
{
    if($i%4==0){
         echo "<td bgcolor='red'>$i</td>";
    }
    else{
    echo "<td>$i</td>";
    }
    if ($i%10==0){
        echo"</tr><tr>";
    }

}

echo "</table>";
?>