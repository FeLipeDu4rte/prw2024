<?php
$x = trim(fgets(STDIN));
for($i=1; $i<=$x; $i++){
    $texto = trim(fgets(STDIN));
    $textoerrado = preg_replace('/[^a-z]/', '', $texto);
    $textocerto = strrev($textoerrado);
    echo $textocerto . "\n";
}
?>