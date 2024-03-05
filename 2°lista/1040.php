<?php
list($a, $b, $c, $d) = explode(" ", readline());

$med = ($a*0.2) + ($b*0.3) + ($c*0.4) + ($d*0.1);
if($med >= 7){
    echo "Media: ".number_format($med, 1, ".", "")."\nAluno aprovado.\n";
}
elseif($med >= 5){
    $e = floatval(readline());
    echo "Media: ".number_format($med, 1, ".", "")."\nAluno em exame.\n"."Nota do exame: ".number_format($e, 1, ".", "")."\n";
    $med = ($e+$med)/2;
    if($med >= 5){
        echo "Aluno aprovado.\n"."Media final: ".number_format($med, 1, ".", "")."\n";
    }
    else{
        echo "Aluno reprovado.\n"."Media final: ".number_format($med, 1, ".", "")."\n";
    }
}
else{
    $med *= 10;
    $med = floor($med);
    $med /= 10;
    echo "Media: $med"."\nAluno reprovado.\n";
}
?>