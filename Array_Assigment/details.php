<?php
ini_set('display_errors', '1');
$det = array("Name"=>"Raashith","Age"=>"19" , "Gender"=>"MEN" , "DOB"=>"01.06.2005");
echo"<pre>";
print_r($det);
echo"</pre>";

echo $det["Name"];
echo"<br>";
echo $det["Age"];
echo"<br>";
echo $det["Gender"];
echo"<br>";
echo $det["DOB"];
echo"<br>";
?>