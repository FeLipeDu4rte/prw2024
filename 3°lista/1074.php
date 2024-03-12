<?php
$y= intval(readline());
$z = array();
$d = 0;
for ($i = 1; $i <= $y; $i++){
    $x = floatval(readline());
    if($x==0){
        array_splice($z, $d, 0, "NULL");
    }
    elseif($x%2==0){
        if($x>0){
            array_splice($z, $d, 0, "EVEN POSITIVE");
        }
        else{
            array_splice($z, $d, 0, "EVEN NEGATIVE");
        }
    }
    else{
        if($x>0){
            array_splice($z, $d, 0, "ODD POSITIVE");
        }
        else{
            array_splice($z, $d, 0, "ODD NEGATIVE");
        }
    }
    $d++;
}
foreach ($z as $elemento) {
    echo $elemento . "\n";
}
?>