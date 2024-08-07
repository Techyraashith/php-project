<?php
$host = '127.1.0.1';
$user = 'root';
$pass = '';
$db = 'Project_no1';

$connection = new mysqli ($host,$user,$pass,$db);

if($connection){
    echo "<h2>Database Successfully Connected</h2>";
}

else {
    echo "<h2>Not Connected</h2>";
}

?>