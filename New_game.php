<?php
echo "\n"."Welcome To The Game :)"."\n";
$answer = array("Protin","Peacock","Chennai","White","Calcium");
print_r($answer);
$a1 = $answer[1];
$a2 = $answer[4];
$a3 = $answer[2];
$a4 = $answer[0];
$a5 = $answer[3];
$a=0;
$ans='y';
while($ans=='y'){
    $a = readline("\n"."Which is the national bird of India"."\n");
    if($a==$a1){
        echo "\n"."Wow great! You Are Correct"."\n";
        break;
    }
    else {
        echo "\n"."Oops Try Again"."\n";
    }

    $ans = readline("\n"."Do you want to continue Y/N"."\n");

}


$b=0;
while($ans=='y'){
    $b = readline("\n"."What is Importent need of Human Bone"."\n");
    if($b==$a2){
        echo "\n"."You Did it Again"."\n";
        break;
    }
    else{
        echo "\n"."Oops Try Again"."\n";
    }
    
    $ans = readline("\n"."Do you want to continue Y/N"."\n");
}
$c=0;
while($ans=='y'){
    $c = readline("\n"."Which is The Capital Of Tamil Nadu"."\n");
    if($c==$a3){
        echo "\n"."You Are Wonderful"."\n";
        break;
    }

    else{
        echo "\n"."Oops Try Again"."\n";
    }
    

    $ans = readline("\n"."Do you want to continue Y/N"."\n");
}
$d=0;
while($ans=='y'){
    $d = readline("\n"."What is Egg Gives"."\n");
    if($d==$a4){
        echo "\n"."Nice Buddy u find it"."\n";
        break;
    }

    else{
        echo "\n"."Oops Try Again"."\n";
    }

    $ans = readline("\n"."Do you want to continue Y/N"."\n");
    
}
$e=0;
while($ans=='y'){
    $e = readline("/n"."what is the Color of lilly"."\n");
    if($e==$a5){
        echo "\n"."Congradulation You Finish The Game You R>>>"."\n";
        break;
    }
    else{
        echo "\n"."Oops Try Again"."\n";
    }
    
    $ans = readline("\n"."Do you want to continue Y/N"."\n");
}
?>