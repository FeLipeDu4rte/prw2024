<?php
$n = intval(readline());
$x = 0;
while($x != $n){
    list($a, $b) = explode(" ", readline());
    $quantidade = 0;
    for($i=0; $i < strlen($a); $i++){
        if($a[$i] != $b[$i]){
            $valorA = ord($a[$i]);
            $valorB = ord($b[$i]);
            if($a[$i] > $b[$i]){
                $quantidade += abs($valorB - $valorA + 26) % 26;
            }else if($a[$i] < $b[$i]){
                $quantidade += abs($valorB - $valorA);
            }
        }
    }
    echo $quantidade . "\n";
    $x++;
}
?>