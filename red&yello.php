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

    $index = 0;
    $person = 0;
    while($person <= 30){

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

            $tiles = $tiles + 2;
        }
        $index ++;

        print_r($color);
        echo "<br><br>Person No: ".$person." Changed Above Array.<br><br><br>";
       
        $person++;
    }


echo "<pre>";
print_r($color);
echo "</pre>";

//echo $color[$tiles];
?>


