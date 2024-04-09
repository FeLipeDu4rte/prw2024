<?php
$n = intval(fgets(STDIN));
$lista=[0, 0, 0];
$lista_acertos=[0, 0, 0];
for($i=1; $i<=$n; $i++){
    $nome = trim(fgets(STDIN));
    $quantidade = explode(" ", trim(fgets(STDIN)));
    $acertos = explode(" ", trim(fgets(STDIN)));
    for($k=0; $k<3; $k++){
            $lista[$k]=$quantidade[$k] + $lista[$k];
            $lista_acertos[$k]=$acertos[$k] + $lista_acertos[$k];
    }
}
echo "Pontos de Saque: ".number_format(($lista_acertos[0]*100)/$lista[0], 2, ".", "")." %.\n";
echo "Pontos de Bloqueio: ".number_format(($lista_acertos[1]*100)/$lista[1], 2, ".", "")." %.\n";
echo "Pontos de Ataque: ".number_format(($lista_acertos[2]*100)/$lista[2], 2, ".", "")." %.\n";
?>