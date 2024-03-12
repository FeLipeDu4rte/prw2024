<?php
while(true){
list($x, $y) = explode(" ", readline());

if($x == 0 or $y ==0){
    break;
}
elseif($x < 0 or $y < 0){
    if($x < 0 and $y < 0){
        echo "terceiro\n";
    }
    elseif($x < 0){
        echo "segundo\n";
    }
    else{
        echo "quarto\n";
    }
}
else{
    echo "primeiro\n";
}
}
?>