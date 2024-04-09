<?php
$removerEspacos = function($frase) {
    $frase = preg_replace('/\s+/', ' ', $frase);
    return trim($frase);
};
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
        $arr = $removerEspacos($arr);
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