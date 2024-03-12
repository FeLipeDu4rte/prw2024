<?php
$y=intval(readline());
if ($y >= 1 and $y<=1000){
    for($i = 1; $i <= $y; $i++){
        if($i%2 == 1){
            print_r($i."\n");
        }
    }
}
?>