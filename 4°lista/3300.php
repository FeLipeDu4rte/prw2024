<?php
list($num) = explode(" ", readline());
$a = strlen($num);
$num1  = str_replace('13', '', $num);
$b = strlen($num1);
if($a > $b){
    echo "$num es de Mala Suerte\n";
    return 0;
}
echo "$num NO es de Mala Suerte\n";
?>