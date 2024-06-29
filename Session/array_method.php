<?php
ini_set('display_errors', '1');
 session_start(); 

/* $a = array();
$b = array_count($a);
for ($i=0;$i<=$b;$i++){
$a = $_POST["array"] ;
}
 */

$a = $_POST["Name"];
$b = $_POST["Age"];
$c = $_POST["Gender"];


/* echo "Name : $a<br>";
echo "Age : $b<br>";
echo "Gender : $c<br>"; */
$student = array("Name"=>"$a","Age"=>"$b","Gender"=>"$c");

$_SESSION["studentdata"]["vptc"] = $student;
echo "<br><br><pre>";
print_r($_SESSION);
echo "</pre><br>";


?>
<html>
    <body>
        <form action="" method="POST">
            Name : <input type="text" name="Name" value><br>
            Age : <input type="text" name="Age" value><br>
            Gender : <input type="text" name="Gender" value><br>
            <input type="submit">
        </form>
    </body>
</html>