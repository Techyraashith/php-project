<?php
include ("connection.php");
session_start();

if(isset($_POST['name']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($name)){
        header("Location:login.php?error=Username is Required");
        exit();
    } 
    else if(empty($password)){
        header("Location:login.php?error=Password is Required");
        exit();
    }

    else{
        $sql = "SELECT * FROM users WHERE name='$name' AND password='$password' ";
        $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result)){
                $row = mysqli_fetch_assoc($result);
            }
    }
}
?>