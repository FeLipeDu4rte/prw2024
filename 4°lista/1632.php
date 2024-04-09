<?php
$x = intval(readline());
for($i=0; $i<$x; $i++){
    $a = 0;
    list($senha) = explode(" ", readline());
    $v = strlen($senha);
    for($k=0; $k<$v; $k++){ 
        if($senha[$k] == 'A' or $senha[$k] == 'E' or $senha[$k] == 'I' or $senha[$k] == 'O' or $senha[$k] == 'S'){
            $a += 1;
        }
        if($senha[$k] == 'a' or $senha[$k] == 'e' or $senha[$k] == 'i' or $senha[$k] == 'o' or $senha[$k] == 's'){
            $a += 1;
        }
    }
    $b = 2**($v-$a);
    if($a != 0){
        $b = (3**$a)*$b;
    }
    echo "$b\n";
}
?>