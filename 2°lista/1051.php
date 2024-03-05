<?php
$s = floatval(readline());
if($s>=0 && $s<=2000.00){
    echo "Isento\n";
}
elseif($s<=3000.00){
    echo "R$ ".number_format((($s- 2000)*0.08), 2, ".", "")."\n";
}
elseif($s<=4500.00){
    echo "R$ ".number_format((($s- 3000)*0.18 + 1000*0.08), 2, ".", "")."\n";
}
else{
    echo "R$ ".number_format((($s- 4500)*0.28 + 1000*0.08+ 1500*0.18), 2, ".", "")."\n";
}
?>