<?php
    $r = floatval(readline());
    $n = 3.14159;
    $A= $n * $r*$r;
    $A = number_format($A, 4, ".", "");
    echo "A=$A\n";
?>