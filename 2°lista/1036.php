<?php
list($a, $b, $c) = explode(" ", readline());
$x = floatval(($b**2) - (4*$a*$c));

if($x > 0 and $a != 0)
{
    $R1 = (-$b + $x**(1/2))/(2*$a);
    echo "R1 = ".number_format($R1, 5, '.', '')."\n";
    $R2 = (-$b - $x**(1/2))/(2*$a);
    echo "R2 = ".number_format($R2, 5, '.', '')."\n";
}
else
{
    echo "Impossivel calcular\n";
}
?>