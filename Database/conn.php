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

//$select = "SELECT * FROM Customers WHERE City = 'Mumbai'";
    
//$select = "SELECT * FROM Customers WHERE Salary >=60000 ";

//$select = "SELECT * FROM Customers WHERE Age >=40";

//$select = "SELECT * FROM Customers WHERE City = 'Mumbai' OR City = 'Delhi'";

//$select = "SELECT * FROM Customers ORDER BY Age ASC";

//$select = "SELECT * FROM Customers ORDER BY Salary DESC";

//$select = "SELECT * FROM Customers ORDER BY City ASC";

//$select = "SELECT * FROM  Customers ORDER BY PostalCode ASC";

//$select = "SELECT * FROM Customers ORDER BY Country ASC, Age ASC";

//$select = "SELECT * FROM Customers WHERE ContactName LIKE 'Raj kapoor%'";

//$select = "SELECT * FROM Customers WHERE Address LIKE '%MG Road'";

//$select = "SELECT * FROM Customers WHERE City LIKE '%pur'";

//$select = "SELECT * FROM Customers WHERE PostalCode LIKE '%3'";

$select = "SELECT COUNT(CustomerID) AS CUSTOMERS FROM Customers";

$run = mysqli_query($conn, $select);

    echo "<table border=1>";
    echo "<tr><th>CustomerID</th>
    <th>CompanyName</th>
    <th>ContactName</th>
    <th>Address</th>
    <th>City/th>
    <th>PostalCode/th>
    <th>Country/th>
    <th>Age/th>
    <th>Salary/th>
    <th>Bornyear/th>
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