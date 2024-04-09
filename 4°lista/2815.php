<?php
$frase = trim(fgets(STDIN));
$quant = strlen($frase);
$frase.='00';
for($i=0; $i<$quant; $i++){
    if($frase[$i] != " "){
        if($frase[$i] == $frase[$i+2] and $frase[$i+1] ==$frase[$i+3]){
            $frase[$i] = '0';
            $frase[$i+1] = '0';
        }
        
    }
}
$frase = str_replace("0", "", $frase);
echo "$frase\n"
?>