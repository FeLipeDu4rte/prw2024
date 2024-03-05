<?php
$x = floatval(readline());
$y=0; 
$z=25;
$t = "[";
for ($i=1; $i<=4; $i++){
    if ($x >= $y and $x <= $z){
        echo "Intervalo $t$y,$z]\n";
        break;
    }
    $y +=25; 
    $z +=25; 
    $t = "(";
}
if($x < 0 or $x > 100){
    echo "Fora de intervalo\n";
}
?>