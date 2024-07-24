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

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Name = $_POST['Name'];
    $Age  = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    
    $sql = "INSERT INTO biodata (Name ,Age ,Gender ,Email,) VALUES ('$Name' ,'$Age', '$Gender', '$Email')";

    if($conn->query($sql)===TRUE){
        echo "<h3>Record Inserted Successfully</h3>";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

/* try{
    $handle = new PDO("mysql:host=$host;dbname=$db","$user","$pass");
    $handle->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<h2>Connected To Database</h2>";

    $sql = "INSERT INTO attendee(firstname,lastname,dob,contact_no,email,speciallty_id) VALUES (:first,:last,:dob,:email,:no,:special)";
            $stmt = $this->$db->prepare($sql);

            $stmt->bindparam(':firstname',$first);
            $stmt->bindparam(':lastname',$last);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact_no',$no);
            $stmt->bindparam(':speciallty_id',$special);
            
            $stmt->execute();

            echo "<h3>Data Sent Successfully</h3>";
}
 catch(PDOException $e){
    die("<h3>Something went wrong in the database</h3>");
    $e->getMessage();
}
 */

?>










<!-- 

$dsn = "mysql:host=$host,dbname=$db,charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e){
        throw new PDOException($e->getMessage());
        echo "<h1>error</h1>";
    }

    require_once 'crud.php';
    $crud = new crud($pdo);*/
 -->