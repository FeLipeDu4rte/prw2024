<?php
function sequencia_espelho($inicio, $fim) {
    $sequencia = '';
    for ($i = $inicio; $i <= $fim; $i++) {
        $sequencia .= $i;
    }
    return $sequencia . strrev($sequencia);
}

$casos = intval(fgets(STDIN));
for ($i = 0; $i < $casos; $i++) {
    $entrada = explode(" ", fgets(STDIN));
    $inicio = intval($entrada[0]);
    $fim = intval($entrada[1]);
    echo sequencia_espelho($inicio, $fim) . "\n";
}        
?>