<?php
ini_set('display_errors', '1'); 
/* $color = array('Red','Yello','Red','Yello','Red');
echo "<pre>";
print_r($color);
echo "</pre>";

for($j=1;$j<=6;$j++)
{
    for($i=0;$i<=4;$i++)
    {
        if ($color[$i]=='Red')
        {
            $color[$i]='Yello';
        }
        
        else
        {
            $color[$i]='Red';
        
        }
    
    }

    print_r($color);

    echo "<br>Person No:".$j." Changed Above Colors.<br><br>";
}
 */

 for($a=0;$a<=50;$a++){

    $color[$a] = 'Red';
}
echo "<pre>";
print_r($color);
echo "</pre>";

/* for($j=0;$j<=30;$j++)
{
    for($i=0;$i<=50;$i+2)
    {
        if($color[$i]==$j)
        {
            $color[$i]=='Yello';
        }
    }
} */

    $increament = 1;
    $index = 0;
    $person = 1;
    while($person <= 50){

        $tiles = $index;

        while($tiles<=50)
        {   
            
            if($color[$tiles] == 'Red'){
                $color[$tiles] = 'Yello';
                /* $index++; */
            }

            else{
                $color[$tiles] = 'Red';
            }

            $tiles = $tiles + $increament;

            #echo $tiles;

        }
        $increament++;
        $index++;
        echo "<table border=1>";
        echo "<tr>";
        for($i=1;$i<=50;$i++){
            #echo "<td>".$color[$i]."</td>";

            if($index==$i){
                echo "<td bgcolor = 'orange'>Orange</td>";
            }

            if($color[$i]=='Red'){
                echo "<td bgcolor = 'red'>".$color[$i]."</td>";
            }
            else{
                echo "<td bgcolor = 'yellow'>".$color[$i]."</td>";
            }

            
        }
        echo "</tr>";
        echo "</table>";
        echo "<br>Person No: ".$person." Changed Above Array.<br><br><br>";
       
        $person++;
    }

echo "<pre>";
print_r($color);
echo "</pre>";

//echo $color[$tiles];

/* for($i=0;$i<=50;$i++){
    echo $color[$i]."<br>";
}
 */
?>


