<?php
list($A, $B) = explode(" ", readline());
if($A > $B){
    if($A % $B == 0){
        echo "Sao Multiplos\n";
    }
    else{
    echo "Nao sao Multiplos\n";
    }
}
elseif($B > $A){
    if($B % $A == 0){
        echo "Sao Multiplos\n";
    }
    else{
    echo "Nao sao Multiplos\n";
    }
}
elseif($B == $A){
    echo "Sao Multiplos\n";
}
else{
    echo "Nao sao Multiplos\n";
}
?>