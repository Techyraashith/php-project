<?php 

$villan = "";
$hero="Batman";
$scene = $hero.":";

if ($villan=="Superman"){
    $scene=$scene."You are not brave... men are brave!!!!";
}else if($villan=="riddler"){
    $scene =$scene."You arenot like me.. You are a garbage!!!!";
}else{
    $scene =$scene."I am Batman";
}

echo $villan."<br>";
echo $scene;

?>