<?php
$N = intval(readline());
$x = 0;
while($x != $N){
    $a = '';
    list($num) = explode(" ", readline());
    $a = $num[0].$num[1];
    $num = str_replace("RA", "", $num);
    $v = strlen($num);
    if($a != 'RA'){
        echo "INVALID DATA\n";
    }
    elseif($v != 18){
        echo "INVALID DATA\n";
    }
    else{
        $num =  ltrim($num, '0');
        echo "$num\n";
    }
    $x++;
}
?>