<?php
$y =0;
$z =0;
$a =0;
$b =0;
for ($i = 1; $i <= 5; $i++){
    $x = floatval(readline());
    if ($x%2==0){
        $y+=1;
    }
    else{
        $z+=1;
    }
    if ($x>0){
        $a+=1;
    }
    if ($x<0){
        $b+=1;
    }
}
echo "$y valor(es) par(es)\n"."$z valor(es) impar(es)\n"."$a valor(es) positivo(s)\n"."$b valor(es) negativo(s)\n";
?>