<?php
$N = intval(readline());
$j = 1;
if (1 < $N and $N < 1000){
    for ($i=0 ;$i<$N ;$i++){
        $x = $j**2;
        $y = $j**3;
        echo "$j "."$x "."$y\n";
        $j = $j + 1;
    }
}
?>
