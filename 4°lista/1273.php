<?php
$es = 0;
while(true) {
    $x = intval(readline());
    if ($x == 0) {
        break;
    }
    
    $z = array();
    $max = 0;
    for ($i = 0; $i < $x; $i++) {
        $arr = readline();
        array_push($z, $arr);
    }
    
    foreach ($z as $frase) {
        $max = max($max, strlen($frase));
    }
    if($es > 0){
        echo "\n";
    }
    $es++;
    foreach ($z as $frase) {
        $esp = $max - strlen($frase);
        echo str_repeat(' ', $esp).$frase."\n";
    }
}
?>