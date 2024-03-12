<?php
$N = intval(readline());
$k = $N;
$j = 1;
if (2< $N and $N <1000){
    for($i = 0; $i<10; $i++){
        $N = $k * $j;
        echo $j.' x '.$k.' = '.$N."\n";
        $j = $j + 1;
    }
}
?>