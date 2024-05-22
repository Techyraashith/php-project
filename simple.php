<html>
       <body>
              <form action="simple.php" method="POST">
                     Principle of amount : <input type="text" name="Principle" value><br>
                     Rate of intrest : <input type="text" name="Rate" value><br>
                     Number of Month : <input type="text" name="Number" value><br>
                     
                     <input type="submit">
              </form>
       </body>
</html>
<pre>
<?php  
Print_r($_POST);
       $p = $_POST["Principle"];  
       $r = $_POST["Rate"];  
       $n = $_POST["Number"];  
       $simple = $p*$r*$n/100;  
       echo("The simple intrest is:$simple");
 ?>  
       </pre>