<?php
$a = "Clock";
$b = "Your Name";
$c = "A Promise";
$d = "Coin";
$e = "France";

$score=0;

echo "\n"."Welcome To Who Am I"."\n";
$ans = 'y';
while($ans == 'y'){
    $riddle_1 = readline("\n"."I have a hands and face but can't old hold anything Who Am I ?"."\n");
    if ($riddle_1 == $a){
        $score++;
    }

    else {
        echo "\n"."Nope Its Wrong"."\n";
    }

    $riddle_2 = readline("\n"."Its belongs to you,but your friends and family use it More Who Am I"."\n");
    if($riddle_2 == $b)
    {
       $score++;
    }

    else{
        echo "\n"."Nope Its Wrong"."\n";
    }

    $riddle_2 = readline("\n"." Who Am I"."\n");
    if($riddle_2 == $c)
    {
       $score++;
    }

    else{
        echo "\n"."Nope Its Wrong"."\n";
    }

}
?>