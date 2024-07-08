<?php
$rock = 1;
$paper = 2;
$sisser = 3;
$round = readline("\n"."Enter the round: "."\n");
$score1 = 0;
$score2 = 0;
for($i=1;$i<=$round;$i++)
{
    echo "\n"."Round $i"."\n";
    $player1 = readline("Player 1 : rock,paper,sisser: ");
    $player2 = readline("Player 2 : rock,paper,sisser: ");
    if($player1 == 1 && $player2 == 3){
        $score1++;
        /* echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n"; */
    }
    if($player1 == 2 && $player2 == 3){
        $score2++;
        /* echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n"; */
    }
    if($player1 == 1 && $player2 == 2){
        $score2++;
        /* echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n"; */
    }
    if($player1 == 3 && $player2 == 2){
        $score1++;
       /*  echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n";
    */ }
    if($player1 == 2 && $player2 == 1){
        $score1++;
        /* echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n"; */
    }
    if($player1 == 3 && $player2 == 1){
        $score1++;
        /* echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n"; */
    }



    if($player1 == 1 && $player2 == 1){

        echo "\n"."Both or equal So no points"."\n";
    }
    if($player1 == 2 && $player2 == 2){

        echo "\n"."Both or equal So no points"."\n";
    }
    if($player1 == 3 && $player2 == 3){

        echo "\n"."Both or equal So no points"."\n";
    }

    echo "\n"."Player1 = $score1"."\n";
        echo "\n"."Player2 = $score2"."\n";
}

if($score1>$score2){
    echo "\n"."Player 1 Won the Game: $score1"."\n";
}
else{
    echo "\n"."Player 2 Won the Game: $score2"."\n";
}


?>