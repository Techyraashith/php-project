<?php
$a = rand(1,100);
$b = rand(1,100);
$c = rand(1,100);
$d = rand(1,100);
echo "<table border=1>";
echo "<tr>";
for($i=1;$i<=100;$i++)
{
    if($a/10 == $r){
        
    } 
  
    /* echo "<td>$i</td>";
   
    for($j=1;$j<=10;$j++){ */
    /* if($i==$a && $a!=$b && $a!=$c && $a!=$d){
         echo "<td bgcolor='red'>$i</td>";
    }

    else if($i==$b && $b!=$a && $b!=$c && $b!=$d){
        echo "<td bgcolor='red'>$i</td>";
    }

    else if($i==$ c && $c!=$a && $c!=$b && $c!=$d){
        echo "<td bgcolor='red'>$i</td>";
    }

    else if($i==$d && $d!=$a && $d!=$c && $d!=$b){
        echo "<td bgcolor='red'>$i</td>";
    }
 */

/* 
    if($i==$a){
        echo "<td bgcolor='red'>$i</td>";
    }
    if($i==$b){
        echo "<td bgcolor='red'>$i</td>";
    }
    
 */

    
    if ($i%10==0){
        echo"</tr><tr>";
    }


}

echo "</table>";
?>