<?php
ini_set('display_errors', '1');
echo "\n"."Guess The Number"."\n";
$a=0;
$answer = rand(40,50); 

while($a!=$answer){
    $a = readline("\n"."Enter the Number"."\n");
    if($a==$answer){
        echo "\n"."WOW! Good job You Did It";
        break ;
    }

    while($a!=$answer){
        if($a>80){
    echo "\n"."oops! Too Greater Try Again"."\n";
        break;
        }
        if($a<30){
            echo "\n"."oops! Too Lesser Try Again"."\n";
            break;
        }

        if($a>50){
            echo "\n"."Nope You Crossed Try Again"."\n";
            break;
        }

        if($a<=50){
            echo "\n"."Too Close Try Again"."\n";
            break;
        }

        if($a>=30){
            echo "\n"."Too Close Try Again"."\n";
            break;
        }
        
        /* else{
            echo"please give a valid number";
        } */

    }

}
?>
