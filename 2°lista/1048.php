<?php
$s = floatval(readline());
if($s>0 && $s<=400.00){
    echo "Novo salario: ".number_format(($s+($s*0.15)), 2, ".", "")."\nReajuste ganho: ".number_format(($s*0.15), 2, ".", "")."\nEm percentual: 15 %\n";
}
elseif($s<=800.00){
    echo "Novo salario: ".number_format(($s+($s*0.12)), 2, ".", "")."\nReajuste ganho: ".number_format(($s*0.12), 2, ".", "")."\nEm percentual: 12 %\n";
}
elseif($s<=1200.00){
    echo "Novo salario: ".number_format(($s+($s*0.10)), 2, ".", "")."\nReajuste ganho: ".number_format(($s*0.10), 2, ".", "")."\nEm percentual: 10 %\n";
}
elseif($s<=2000.00){
    echo "Novo salario: ".number_format(($s+($s*0.07)), 2, ".", "")."\nReajuste ganho: ".number_format(($s*0.07), 2, ".", "")."\nEm percentual: 7 %\n";
}
else{
    echo "Novo salario: ".number_format(($s+($s*0.04)), 2, ".", "")."\nReajuste ganho: ".number_format(($s*0.04), 2, ".", "")."\nEm percentual: 4 %\n";
}
?>