<?php
$i=1;
while($i<=5){
    $j=1;
    while($j<=5){
        if($j<=$i)
        {
        echo"*";
        }
        else{
            echo"-";
        }
        $j++;
    
    }
   /*  $k=4;
    while($k>=1)
    {

            echo"-";
            $k--;
            
        } */
    
    
    echo "<br>";
    $i++;
}
?>