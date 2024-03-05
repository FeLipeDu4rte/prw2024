<?php
list($x, $y, $z) = explode(" ", readline());

if($x > $y and $x > $z){
    if($y > $z){
        echo "$z\n"."$y\n"."$x\n\n"."$x\n"."$y\n"."$z\n";
    }
    else{
        echo "$y\n"."$z\n"."$x\n\n"."$x\n"."$y\n"."$z\n";
    }
}
if($y > $x and $y > $z){
    if($x > $z){
        echo "$z\n"."$x\n"."$y\n\n"."$x\n"."$y\n"."$z\n";
    }
    else{
        echo "$x\n"."$z\n"."$y\n\n"."$x\n"."$y\n"."$z\n";
    }
}
if($z > $x and $z > $y){
    if($x > $y){
        echo "$y\n"."$x\n"."$z\n\n"."$x\n"."$y\n"."$z\n";
    }
    else{
        echo "$x\n"."$y\n"."$z\n\n"."$x\n"."$y\n"."$z\n";
    }
}
?>