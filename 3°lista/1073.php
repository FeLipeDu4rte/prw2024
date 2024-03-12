<?php
$x = intval(readline());
$v = 0;
if(5< $x and $x<2000){
    if($x%2==0){
    for($i = 0;$i <$x/2; $i++){
        $v+=2;
        $y=$v**2;
        echo "$v^2 = $y\n";
    }
    }
    else{
    for($i = 0;$i <($x- 1)/2; $i++){
        $v+=2;
        $y=$v**2;
        echo "$v^2 = $y\n";
    }
    }
    }
?>