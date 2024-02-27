<?php
$name= $_GET["name"];
$idade= $_GET["idade"];
$sal= $_GET["sal"];

if($sal>=0 && $sal<=1045.00){
    $inss = number_format(($sal *0.075), 2, ".", "");
    echo "valor pago INSS R$ ".$inss."<br>";
}
elseif($sal<=2089.60){
    $inss = number_format(($sal *0.09), 2, ".", "");
    echo "valor pago INSS R$ ".$inss."<br>";
}
elseif($sal<=3134.00){
    $inss = number_format(($sal *0.12), 2, ".", "");
    echo "valor pago INSS R$ ".$inss."<br>";
}
elseif($sal<=6101.06){
    $inss = number_format(($sal *0.14), 2, ".", "");
    echo "valor pago INSS R$ ".$inss."<br>";
}
else{
    $inss = number_format((6101.06 *0.14), 2, ".", "");
    echo "valor pago INSS R$ ".$inss."<br>";
}

if($sal>=0 && $sal<=2112.00 || $idade >= 65){
    echo "Inseto do valor pago IRPF";
}
elseif($sal<=2826.65){
    echo "valor pago IRPF R$ ".number_format((($sal-$inss) *0.075 - 158.40), 2, ".", "")."<br>";
}
elseif($sal<=3751.05){
    echo "valor pago IRPF R$ ".number_format((($sal-$inss) *0.15 - 370.40), 2, ".", "")."<br>";
}
elseif($sal<=4664.68){
    echo "valor pago IRPF R$ ".number_format((($sal-$inss) *0.2250 - 651.73), 2, ".", "")."<br>";
}
else{
    echo "valor pago IRPF R$ ".number_format((($sal-$inss) *0.2750 - 884.96), 2, ".", "")."<br>";
}
?>