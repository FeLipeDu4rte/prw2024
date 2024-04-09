<?php
function ordenarCodigosLivros($codigos) {
    sort($codigos);
    return $codigos;
}

while ($line = fgets(STDIN)) {
    $n = intval($line);
    $codigos = [];
    for ($i = 0; $i < $n; $i++) {
        $codigo = trim(fgets(STDIN));
        $codigos[] = $codigo;
    }
    $codigosOrdenados = ordenarCodigosLivros($codigos);
    foreach ($codigosOrdenados as $codigo) {
        echo $codigo . "\n";
        }
    }


?>