<?php
$con = new mysqli("localhost","pma","","Detail");

if($con->connect_errno){

    echo $con->connect_error;
    die();
}
else{
    echo "Database Connected";
}

?>