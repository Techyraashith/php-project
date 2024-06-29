<?php
 /* function Age($var){
    return ($var[$row][$col] <= 20);
}  */

$student = array(array("raashith",19,"raashith@gmail.com",9043543212,"01-06-2005","A1+","Neyveli"),
array("rajkumr",20,"raj@gmail.com","phone"=>9456783234,"02-04-1996","B+","Kurunchipaadi"),
array("pugaz",54,"pugaz@gmail.com",9876543221,"04-06-1992","AB-","Cuddalore"),
array("subathish",30,"subathish@gmail.com",9087654321,"02-04-1983","AB+","Neyveli Township"),
array("gokul",47,"gokul@gmail.com",9875432167,"20-11-1978","B+","Kurunchipadi"),
array("Manoj",36,"manoj@gmail.com",8976543417,"03-12-1994","O+","Neyveli"),
array("Guru",29,"guruthri@gmail.com",9077654321,"17-06-1994","B-","Viruthashalam"),
array("Karthik",23,"karthik@gmail.com",7344532345,"04-07-1999","A+","Chithambaram"));
/* $student = ar($student[2][1],"Age");
$student = array_filter($student[3][1],"Age");
$student = array_filter($student[4][1],"Age");
$student = array_filter($student[5][1],"Age");
$student = array_filter($student[6][1],"Age");
$student = array_filter($student[7][1],"Age"); */ 
echo"<pre>";
print_r($student);
echo"</pre><br>";

for($a=0;$a<=7;$a++){
    /* for($b=0;$b<=6;$b++){ */
  /*   $stud = array_filter($student[$a][$b],"Age"); 
 } */
 if($student[$a][1] <= 20){
    echo "hello";
    $stud[$a] = $student[$a];
}     /*  echo $student[$a][1]."<br>"; */
}


echo "<pre>";
print_r($stud);
echo "</pre>";

echo"<table border = 2 >";
echo "<tr>
<th>Name</th>
<th>age</th>
<th>gmail</th>
<th>phone no</th>
<th>DOB</th>
<th>Blood Group</th>
<th>Place</th>
</tr>";
 for($i=0;$i<=7;$i++)
{
    echo "<tr>";
     for($j=0;$j<=6;$j++)
    {
       echo"<td>".$stud[$i][$j]."</td>";  

 }
 echo "</tr>";
}
echo "</table>";
/* echo $student[0][0]."&ensp; ".$student[0][1]."&ensp; ".$student[0][2]."&ensp; ",$student[0][3]."&ensp; ".$student[0][4];
echo $student[1][0]."&ensp; ".$student[1][1]."&ensp; ".$student[1][2]."&ensp; ",$student[1][3]."&ensp; ".$student[1][4];
echo $student[2][0]."&ensp; ".$student[2][1]."&ensp; ".$student[2][2]."&ensp; ",$student[0][3]."&ensp; ".$student[2][4]; */
echo"<br>"
?>
 <!-- <html>
    <body>
        <style>
            table,th,td{
        border:1px solid black;
    }
    </style>
    <table style = "width = 500">
        <tr>
        <th>Name</th>
        <th>age</th>
        <th>gmail</th>
        <th>phone no</th>
        <th>DOB</th>
        <th>Blood Group</th>

</tr>

<tr>
    <td>Raashith</td>
    <td>19</td>
    <td>raashith@gmail.com</td>
    <td>9345812323</td>
    <td>01-06-2005</td>
    <td>A1+</td>
</tr>

<tr>
    <td>Rajkumar</td>
    <td>19</td>
    <td>raj@gamil.com</td>
    <td>9087654321</td>
    <td>02-03-2005</td>
    <td>B+</td>
</tr>

</table>
       
        </style>
    </body>
</html>  -->