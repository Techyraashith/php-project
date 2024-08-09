<html>
    <body>
        <form action="" method = "POST">
            City     : <input type="text" name = "City" value><br>
            Age : <input type="number" name = "Age" value>
             <input type="text" name = "range1" value><br>
            Salary : <input type="number" name = "salary" value>
            <input type="text" name ="range2" value><br> 
            <!--Order : <input type="text" name = "order" value><br>-->  
            Born Year From : <input type="text" name = "dob1" value><br>
            Born Year To : <input type="text" name = "dob2" value><br>
            <!--Customer Like From : <input type="text" name = "like1" value><br>
            Customer Like To : <input type="text" name = "like2" value><br>-->
            <input type="submit" Value = "Seach">

        </form>
    </body>
</html>

<?php
ini_set('display_errors', '1'); 

$host = '127.1.0.1';
$user = 'root';
$pass = '';
$db = 'Project_no1';

$conn = new mysqli ($host,$user,$pass,$db);

if($conn){
    echo "<h2>Database Successfully Connected</h2>";
}

else {
    echo "<h2>Not Connected</h2>";
}
$City = $_POST['City'];
//$Order = $_POST['order'];
$Salary = $_POST['salary'];
/* $s2 = $_POST['s2']; */
$dob1 = $_POST['dob1'];
$dob2 = $_POST['dob2'];
$Age = $_POST['Age'];
$greater = "greater";
$lesser = "lesser";
$range1 = $_POST['range1'];
$range2 = $_POST['range2'];


/* $ageto = $_POST['Ageto']; */
/* $like1 = $_POST['like1'];
$like2 = $_POST['like2']; */

//$select = "SELECT * FROM Customers";
/* 
$villan = "Superman";
$hero="Batman";
$scene = $hero.":";

if ($villan=="Superman"){
    $scene=$scene."You are not brave... men are brave!!!!";
}else if($villan=="riddler"){
    $dialog =$scene."You arenot like me.. You are a garbage!!!!";
}else{
    $dialog =$scene."I am Batman";
}

echo $scene;
 */

$select = "SELECT * FROM Customers WHERE 1=1 ";

if ($_POST['Age'] && $range1 == $greater){
    $select = $select." and Age > $Age";
}

if ($_POST['Age'] && $range1 == $lesser){
    $select = $select." and Age < $Age";
}


if ($_POST['salary'] && $range2 == $greater){
    $select = $select." and Salary > $salary";
}

if ($_POST['salary'] && $range2 == $lesser){
    $select = $select." and Salary < $salary";
}

if ($_POST['City']){
    $select = $select." and City ='$City'";
}

if ($_POST['dob1'] && $_POST['dob2']){
    $select = $select." and Bornyear BETWEEN ".$dob1." AND ".$dob2;
}
/* 
if ($_POST['like1'] && $_POST['like2']){
    $select = $select."and LIKE"."%".$like1."OR".$like2."%";

    echo "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&";
} */
 echo $select;


/*$select = "SELECT * FROM Customers WHERE Salary BETWEEN $s1 AND $s2 AND
 Age BETWEEN $agefrom AND $ageto AND City = '$City'AND 
 Bornyear BETWEEN $dob1 AND $dob2 AND LIKE %$like1 OR LIKE $like2%";
 */    
//$select = "SELECT * FROM Customers WHERE Salary BETWEEN $s1 AND $s2";

//select = "SELECT * FROM Customers WHERE Age BETWEEN $agefrom AND $ageto";

//$select = "SELECT * FROM Customers WHERE Bornyear BETWEEN $dob1 AND $dob2";

//$select = "SELECT * FROM Customers WHERE City = 'Mumbai' OR City = 'Delhi'";

/* if($Order == 'a'){

$select = "SELECT * FROM Customers ORDER BY Age ASC"; */

//$select = "SELECT * FROM Customers ORDER BY Salary ASC";

//$select = "SELECT * FROM Customers ORDER BY City ASC;

//$select = "SELECT * FROM  Customers ORDER BY PostalCode ASC";

//$select = "SELECT * FROM Customers ORDER BY Country ASC, Age ASC";
/* }

else{
    $select = "SELECT * FROM Customers ORDER BY Age DESC";

    //$select = "SELECT * FROM Customers ORDER BY Salary DESC";

    //$select = "SELECT * FROM Customers ORDER BY City DESC";

    //$select = "SELECT * FROM  Customers ORDER BY PostalCode DESC";

    //$select = "SELECT * FROM Customers ORDER BY Country DESC, Age DESC";
}
 */
//$select = "SELECT * FROM Customers WHERE ContactName LIKE 'Raj kapoor%'";

//$select = "SELECT * FROM Customers WHERE Address LIKE '%MG Road'";

//$select = "SELECT * FROM Customers WHERE City LIKE '%pur'";

//$select = "SELECT * FROM Customers WHERE PostalCode LIKE '%3'";

$run = mysqli_query($conn, $select);
/* echo "<pre>";
Print_r($run);
echo "</pre>"; */

    echo "<table border=1>";
    echo "<tr><th>CustomerID</th>
    <th>CompanyName</th>
    <th>ContactName</th>
    <th>Address</th>
    <th>City</th>
    <th>PostalCode</th>
    <th>Country</th>
    <th>Age</th>
    <th>Salary</th>
    <th>Bornyear</th>
    </tr>";


    while($row = mysqli_fetch_array($run,MYSQLI_ASSOC)){

        echo "<tr>";
        echo "<td>".$row['CustomerID']."</td>".
        "<td>".$row['CompanyName']."</td>".
        "<td>".$row['ContactName']."</td>".
        "<td>".$row['Address']."</td>".
        "<td>".$row['City']."</td>".
        "<td>".$row['PostalCode']."</td>".
        "<td>".$row['Country']."</td>".
        "<td>".$row['Age']."</td>".
        "<td>".$row['Salary']."</td>".
        "<td>".$row['Bornyear']."</td>";
        echo "</tr>";

    }
    echo "</table>";
?>

