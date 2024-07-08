<?php
echo "\n"."Welcome To The Game :)"."\n";
/* $answer = array("Protin","Peacock","Chennai","White","Calcium");
 */
echo "Answers:"."\n"."1.Protien"."\n".
"2.Peacock"."\n".
"3.chennai"."\n".
"4.White"."\n".
"5.Calcium"."\n";

/* print_r($answer); */
/* $a1 = $answer[1];
$a2 = $answer[4];
$a3 = $answer[2];
$a4 = $answer[0];
$a5 = $answer[3];
 $a=0;*/
$ans='y';
$score=0;
while($ans=='y'){
        /* while($Solu!=$answer){ */
        $a = readline("\n"."1.Which is the national bird of India: "."\n");
            if($a==2){
                $score = $score + 1;
             }
        /*     else {
                echo "\n"."Oops Try Again"."\n";
                $ans = readline("\n"."Do you want to continue Y/N"."\n");
            } */

        $b = readline("\n"."2.What is Importent need of Human Bone: "."\n");
            if($b==5){
                $score = $score + 1;
              }
            /* else{
                echo "\n"."Oops Try Again"."\n";
                $ans = readline("\n"."Do you want to continue Y/N"."\n");
            } */
        
        $c = readline("\n"."3.Which is The Capital Of Tamil Nadu: "."\n");
            if($c==3){
                $score = $score + 1;
            }

            /* else{
                echo "\n"."Oops Try Again"."\n";
                $ans = readline("\n"."Do you want to continue Y/N"."\n");              
            }
         */
        $d = readline("\n"."4.What is Egg Gives: "."\n");
            if($d==1){  
                $score = $score + 1;
            }
/* 
            else{
                echo "\n"."Oops Try Again"."\n";      
                $ans = readline("\n"."Do you want to continue Y/N"."\n");
            } */
        
        $e = readline("\n"."5.what is the Color of lilly: "."\n");
            if($e==4){
                $score = $score + 1;
              /*   $score += 1; */
            }
            /* else{
                echo "\n"."Oops Try Again"."\n";
                $ans = readline("\n"."Do you want to continue Y/N"."\n");
            } */
              
    /* } */
    echo "\n"."Your Score :$score/5"."\n";
     $ans = readline("\n"."Do you want to Play Again y/n: "."\n"); 
}
echo "\n"."Thank You For your Time :)"."\n";
?>


<!-- Answer :
1. Peacock
2. Protien
3. Chennai
4. White
5. Calcium


1. Which is the national bird of India : 1
2. What is Importent need of Human Bone: 3
...........
..........
Your Score : 3/5
Do you wish to continue Y/N : N -->
