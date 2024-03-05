<?php
list($A, $B, $C) = explode(" ", readline());

if($A < $B + $C and $B < $A + $C and $C < $A + $B){
    
    $perimetro = $A + $B + $C;
    echo "Perimetro = ".number_format($perimetro, 1, ".", "")."\n";
}
else{
    $area = (($A + $B) * $C) / 2;
    echo "Area = ".number_format($area, 1, ".", "")."\n";
}
?>