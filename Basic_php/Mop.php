<?php
function mop($place,$liquid)
{
    echo"<b>".strtoupper($place)."</b><br>";
    echo"take the bucket to <b>".$place."</b> <br>";
    if($liquid==1){
    echo"<i><b>Mix the lizal </b></i><br>";
    }
    echo"take the mop stick <br>";
    echo"dip into the soap water <br>";
    echo"then rinse the mop head <br>";
    echo"DD Start to rub the mop stick on the floor <br>";
    echo"Keep the process until clean the entire <b>".$place."</b> <br>";
    echo"then leave it to dry <br><br>";

}
echo"take the bucket with water <br>";
mop('hall',1);
mop('room',0);
mop("kitchen",1);
?>