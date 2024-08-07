<?php
session_unset();
    $a = $_POST["Name"];
    $b = $_POST["Age"];
    $c = $_POST["Gender"];
    $d = $_POST["City"];
    $student = array("Name" => $a, "Age" => $b, "Gender" => $c, "City" => $d);

    $_SESSION["studentdata"][] = $student;

$s = $_SESSION;


echo "<table border=2>";
echo "<tr><th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>City</th></tr>";

session_unset();
$count = count($s["studentdata"]);
for ($i = 0; $i < $count; $i++) {
    echo "<tr>";
    echo "<td>" . $s["studentdata"][$i]["Name"] . "</td>";
    echo "<td>" . $s["studentdata"][$i]["Age"] . "</td>";
    echo "<td>" . $s["studentdata"][$i]["Gender"] . "</td>";
    echo "<td>" . $s["studentdata"][$i]["City"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<html>
    <body>
        <form action="" method="POST">
           Name : <input type="text" name="Name"><br>
           Age : <input type="text" name="Age"><br>
           Gender : <input type="text" name="Gender"><br>
           City :  <input type="text" name="City"><br>
            <input type="submit">
        </form>
    </body>
</html>
