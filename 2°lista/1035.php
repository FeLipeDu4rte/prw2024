<?php
list($A, $B, $C, $D) = explode(" ", readline());

if ($B > $C and $D > $A and $C+$D > $A+$B and $C >= 0 and $D >= 0 and $A % 2 == 0){
    echo "Valores aceitos\n";
}
else{
    echo "Valores nao aceitos\n";
}
?>