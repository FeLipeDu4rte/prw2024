<?php
    list($A, $B) = explode(" ", readline());
    list($C, $D) = explode(" ", readline());
    
    $dist = (($C - $A)**2 + ($D - $B)**2) ** (1/2);
    $dist = number_format($dist, 4, ".", "");
    
    echo "$dist\n";
?>