<?php
session_start();
    $a = $_POST["Name"];
    $b = $_POST["Age"];
    $c = $_POST["Gender"];
    $d = $_POST["City"];
    $student = array("Name" => $a, "Age" => $b, "Gender" => $c, "City" => $d);

    $_SESSION["studdata"][] = $student;

$s = $_SESSION;

echo "<table border=2>";
echo "<tr><th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>City</th></tr>";

$count = count($s["studdata"]);
for ($i = 0; $i < $count; $i++) {
    echo "<tr>";
    echo "<td>" . $s["studdata"][$i]["Name"] . "</td>";
    echo "<td>" . $s["studdata"][$i]["Age"] . "</td>";
    echo "<td>" . $s["studdata"][$i]["Gender"] . "</td>";
    echo "<td>" . $s["studdata"][$i]["City"] . "</td>";
    echo "</tr>";
   /*  echo $s["studentdata"][$i]["Name"]; */
}

echo "</table>";
?>

<html>
    <body>
        <form action="" method="POST">
           Name : <input type="text" name="Name"><br>
           Age : <input type="text" name="Age"><br>
           <label for="">Gender</label>
        <input type="radio" name="Gender" value="Male"> Male
        <input type="radio" name="Gender" value="Female"> Female<br>
           City :  <input type="text" name="City"><br>
            <input type="submit">
        </form>
    </body>
</html>
