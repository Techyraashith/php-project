 <?php
ini_set('display_errors', '1');

echo "<pre>";
print_r($_POST);
echo "</pre>";


$sub1=$_POST["Tamil"];
$sub2=$_POST["English"];
$sub3=$_POST["Maths"];
$sub4=$_POST["Science"];
$sub5=$_POST["Social"];
$reg_no=$_POST["Reg_no"];
$name=$_POST["Name"];
?>

<html>
    <body>
        <form action="Mark.php" method="POST">
            Name : <input type="text" name="Name" value><br><br>
            Reg_no : <input type="text" name="Reg_no" value><br><br><br>
            Tamil : <input type="text" name="Tamil" value><br>
            English : <input type="text" name="English" value><br>
            Maths : <input type="text" name="Maths" value><br>
            Science : <input type="text" name="Science" value><br>
            Social : <input type="text" name="Social" value><br>
            <input type="submit">
        </form>



<style>
    table,th,td{
        border:1px solid black;
    }
    </style>
        <table style ="Width:500">
        <tr>
            <th>Subject</th>
            <th>Mark</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Tamil</td>
            <td><?php echo $sub1; ?></td>
            <td><?php if ($sub1>=35){
                echo "Pass";}
                else {
                    echo"Fail";
                }?></td>
        </tr>

        <tr>
            <td>English</td>
            <td><?php echo $sub2;?></td>
            <td><?php if ($sub2>=35){
                echo "Pass";}
                else {
                    echo"Fail";
                }?></td>
        </tr>

        <tr>
            <td>Maths</td>
            <td><?php echo $sub3;?></td>
            <td><?php if ($sub3>=35){
                echo "Pass";}
                else {
                    echo"Fail";
                }?></td>
        </tr>

        <tr>
            <td>Science</td>
            <td><?php echo $sub4;?></td>
            <td><?php if ($sub4>=35){
                echo "Pass";}
                else {
                    echo"Fail";
                }?></td>
        </tr>

        <tr>
            <td>Social</td>
            <td><?php echo $sub5;?></td>
            <td><?php if ($sub5>=35){
                echo "Pass";}
                else {
                    echo"Fail";
                }?></td>
        </tr>

        <tr>
            <th>Total</th>
            <th><?php $total = $sub1+$sub2+$sub3+$sub4+$sub5;
 echo $total;?></th>
            <th><?php if  ($sub1>=35 && $sub2>=35 && $sub3 && $sub4>=35 && $sub5>=35)
            {
                echo "Pass";
            }
            else{
                echo "fail";
            }?></th>
        </tr>
</table>

    </body>
</html>