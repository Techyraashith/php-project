<?php
$host = '127.1.0.1';
$user = 'root';
$pass = '';
$db = 'Biodata';

$conn = new mysqli($host, $user, $pass, $db);

if(!$conn){
    die("<h2>Connection failed</h2>");
}

else{
    echo "<h2>Database Connected</h2>";
}


$Name = 'Name';

$sql = "DELETE FROM biodata WHERE Name = $Name";

if($conn->query($sql)===TRUE){
    echo "<h3>Record Deleted Successfully</h3>";
}

else{
    echo "<h3>Oops Somthing Went Wrong!</h3>";
}

$conn->close();

?>