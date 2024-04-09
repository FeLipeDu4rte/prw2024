<?php
$N = intval(readline());
$x = 0;
while($x != $N){
    $a = '';
    $b = 0;
    list($num) = explode(" ", readline());
    $v = strlen($num);
    $num.="a";
    for($i=0; $i<=$v; $i++){ 
        if($num[$i] == '1' or $num[$i] == '2' or $num[$i] == '3' or $num[$i] == '4' or $num[$i] == '5' or $num[$i] == '6' or $num[$i] == '7' or $num[$i] == '8' or $num[$i] == '9'){
            $a .= $num[$i];
        }
        elseif($num[$i] != '1' or $num[$i] != '2' or $num[$i] != '3' or $num[$i] != '4' or $num[$i] != '5' or $num[$i] != '6' or $num[$i] != '7' or $num[$i] != '8' or $num[$i] != '9'){
            if($a != ''){
                $b += $a;
                $a='';
            }
        }
    }
    echo "$b\n";
    $x++;
}
?>