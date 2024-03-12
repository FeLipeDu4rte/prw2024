<?php
$y =0;
for ($i = 1; $i <= 6; $i++){
    $x = floatval(readline());
    if ($x>0){
        $y+=1;
    }
}
echo "$y valores positivos\n";
?>