<?php
$x = intval(readline());
for($i = 1; $i <= 10000; $i++){
    $z = $i % $x;
    if ($z==2){
        printf($i."\n");
    }
}
?>