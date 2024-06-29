<?php
echo "<table border=2>";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 1) {
                echo "<tr>";
            }
            echo "<td>$i</td>";
            if ($i % 5 == 0) {
                echo "</tr>";
            }
        }
echo "</table>";
?>