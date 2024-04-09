<?php
$x = intval(readline());
for($i=0; $i<$x; $i++){
    $a = 0;
    list($led) = explode(" ", readline());
    $v = strlen($led);
    for($k=0; $k<$v; $k++){ 
        if($led[$k] == '1'){
            $a += 2;
        }
        elseif($led[$k] == '2' or $led[$k] == '3' or $led[$k] == '5'){
            $a += 5;
        }

        elseif($led[$k] == '4'){ 
            $a += 4;
        }
        elseif($led[$k] == '7'){
            $a += 3;
        }
        elseif($led[$k] == '8'){
            $a += 7;
        }
        elseif($led[$k] == '9' or $led[$k] == '0' or $led[$k] == '6'){ 
            $a += 6;
        }
    }
    echo "$a leds\n";
}
?>