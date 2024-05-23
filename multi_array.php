<?php
/* 
$student = array (
    array(22503545,"Raashith",34,45),
    array(22503543,"Rajkumar",45,78),
    array(22503541,"Gokul",35,45)
);
echo"<pre>"; 
print_r($student);
echo"</pre>"; */
?> 

<html>
    <body>
        <style>
            table,th,td{
        border:1px solid black;
            }

        </style>
        <table style="width:500">
        <tr>
            <th>Register Number</th>
            <th>Name</th>
            <th>Mark</th>
        </tr>

        <?php

        echo "tr>
        <td>".$val."</td>
        <td>Raashith mohammed</td>
        <td>452</td>";

        ?>

        <!-- <tr>
            <td>22503545</td>
            <td>Raashith mohammed</td>
            <td>452</td>
        </tr>

        <tr>
            <td>22503542</td>
            <td>Rajkumar</td>
            <td>456</td>
        </tr>

        <tr>
            <td>22503542</td>
            <td>Gokul</td>
            <td>453</td>
        </tr>
        
        <tr>
            <td>22503549</td>
            <td>Ram</td>
            <td>460</td>
        </tr>

        <tr>
            <td>22503548</td>
            <td>karthi</td>
            <td>458</td>
        </tr> -->

        </table>
    </body>
</html>