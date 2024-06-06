<?php
for ($num = 2; $num <= 50; $num++) 
{ 
    for ($i = 2; $i < $num; $i++) 
    {
        if ($num % $i == 0) 
        { 
            break; 
        }
    }
    if ($i == $num) 
    { 
        echo $num . "<br>"; 
    }
}
?>
