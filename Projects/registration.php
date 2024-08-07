<?php
ini_set('display_errors', '1'); 
include("connection.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile'];

    $sql = "INSERT INTO users (name ,email ,password ,mobile) VALUES ('$name' ,'$email', '$password', '$mobile_no')";
    echo $sql;
    if($connection->query($sql)===TRUE){
        echo "<h2>User Registed Successfully</h2>";
    }

    else {
        echo "<h2>Oops! Somthing wrong, Data Not Stored</h2>";
    }

     /* $delete = "DELETE FROM users WHERE name = 'siva'"; */ 


    $select = "SELECT * FROM users";

    $run = mysqli_query($connection, $select   /* $delete */ );

    echo "<table border=1>";
    echo "<tr><th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Mobile</th></tr>";


    while($row = mysqli_fetch_array($run,MYSQLI_ASSOC)){

        echo "<tr><td>".$row['name']."</td>"."<td>".$row['email']."</td>"."<td>".$row['password']."</td>"."<td>".$row['mobile']."</td></tr>";
 /*        
echo"<pre>";
print_r($row);
echo "</pre>";  */
  /* echo "Name :".$row['name']."<br>"."Email :".$row['email']."<br>"."Password :".$row['password']."<br>"."Mobile: ".$row['mobile']."<br><br><br>"; */
    }
    echo "</table>";
 }

?>