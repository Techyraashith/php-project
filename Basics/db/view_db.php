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


// Execute SQL query and display results
$result = $conn->query("SELECT Name, Age, Gender, Email FROM biodata");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]  .  "Age: " . $row["Age"]  . "Gender: " . $row["Gender"] .  "Email: ". $row["Email"] ."<br>";
    }
} else {
    echo "No results found";
}

// Close connection
$conn->close();
?>
