<html>
       <body>

              <form action="simple.php" method="POST">
                     Principal of amount : <input type="text" name="Principal of Amount"value><br>
                     Rate of intrest : <input type="text" name="Rate of intrest"value><br>
                     Number of Month : <input type="text"name="Number of Month"value><br>
                     <input type="submit">

              
              </form>

       </body>
</html>

<?php  
       $p = $_POST["p"];  
       $r = $_POST["r"];  
       $n = $_POST["n"];  
       $a = $p*$r*$n/100;  
       echo("Simple Interest is:$a");
       ?>  