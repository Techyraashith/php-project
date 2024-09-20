<?php
function staircase($n) {
    
      for ($i = 0; $i <= $n; $i++) {

        for ($j = $i; $j <= $n; $j++) {
            echo "_";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "#";
        }

        echo "<br>";
    }
}

staircase(6);
?>