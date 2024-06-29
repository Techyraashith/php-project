<?php
ini_set('display_errors', '1');
session_start();
$detail = array("name"=>"Raashith","Age"=>"19","Gender"=>"Male");
?>

<html>
    <body>
        <?php
       
       $_SESSION["details"]=$detail;
        echo "<pre>"; 
       print_r($_SESSION);
        echo "</pre>"; 
         
        ?>
    </body>
</html>