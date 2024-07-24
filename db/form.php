<?php
require 'conn.php';
 ini_set('display_errors', '1'); 
/* $first = $_POST['firstname'];
$last  = $_POST['lastname'];
$dob   = $_POST['dob'];
$email = $_POST['email'];
$no    = $_POST['no'];
$special = $_POST['speciallty']; 
 */
 /* if(isset($_POST['submit'])){
    $first = $_POST['firstname'];
    $last  = $_POST['lastname'];
    $dob   = $_POST['dob'];
    $email = $_POST['email'];
    $no    = $_POST['no'];
    $special = $_POST['special'];
    $issucces = $crud->insert($first,$last,$dob,$email,$no,$special);

    if($issucces){
        echo "<h1>*****Its Success*****</h1>";
    }

    else{
        echo "</h1>Error Occures</h1>";
    }
}  */

/* echo "First Name     :  $first<br>";
echo "Last Name      :  $last<br>";
echo "Date Of Birth  :  $dob<br>";
echo "Email          :  $email<br>";
echo "Contact Number :  $no<br>";
echo "Speciallty     :  $special";
echo "<br><br>"; */
?>

<html>
    <body>
        <form action="" method="POST">
        Name     : <input type="text" name="Name" value><br>
        Age      : <input type="text" name="Age" value><br>
        Gender   : <input type="text" name="Gender" value><br>
        Email    : <input type="text" name="email" value><br>
        <input type="submit">
        </form>
    </body>
</html>