<?php
$y =0;
$z = array();
for ($i = 1; $i <= 6; $i++){
    $x = floatval(readline());
    if ($x>0){
        array_splice($z, $y, 0, $x);
        $y+=1;
    }
}
$soma = array_sum($z);
$quantidade = count($z);
$media = $soma / $quantidade;
echo "$y valores positivos\n";
echo "".number_format($media, 1, ".", "")."\n";
?>