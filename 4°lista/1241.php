<?php
$x = trim(fgets(STDIN));
for($i=0; $i<$x; $i++){
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    $p=0;
    $quant1 = strlen($a);
    $quant2 = strlen($b);
    $a = strrev($a);
    $b = strrev($b);
    if($quant2 > $quant1){
        echo "nao encaixa\n";
    }else{
        $dif = $quant1-$quant2;
        for($k=0; $k<$quant2; $k++){
            if($a[$k] == $b[$k]){
                $p++;
            }
        }
        if($p == $quant2){
            echo "encaixa\n";
        }
        else{
            echo "nao encaixa\n";
        }
    }
}
?>