<?php
$x = intval(readline());
$v = 0;
$z = 0;
for($i=0; $i<$x; $i++){
    $y = intval(readline());
    if($y>=10 and $y<=20){
        $v++;
    }
    else{
        $z++;
    }
}
echo "$v in\n"."$z out\n";
?>
