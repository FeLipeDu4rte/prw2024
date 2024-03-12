<?php
$y =0;
for ($i = 1; $i <= 5; $i++){
    $x = floatval(readline());
    if ($x%2==0){
        $y+=1;
    }
}
echo "$y valores pares\n";
?>