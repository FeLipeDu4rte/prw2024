<?php
while(true){
    list($a, $b) = explode(" ", readline());
    if($a == 0 and $b == 0){
        break;
    }
    $soma = $a+$b;
    list($soma) = explode(" ", $soma);
    $soma = str_replace("0", "", $soma);
    echo "$soma\n";
}
?>