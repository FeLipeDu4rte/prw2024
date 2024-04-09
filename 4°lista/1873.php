<?php
$x = intval(readline());
for($i=0; $i<$x; $i++){
    list($a, $b) = explode(" ", readline());
    $empate=0;
    if($a == 'tesoura'){
        if($b == 'papel' or $b == 'lagarto'){
            $a=1;
        }
        else if($b == 'pedra' or $b == 'spock'){
            $b=1;
        }
        else{
            $empate=1;
        }
    }
    if($a == 'papel'){
        if($b == 'pedra' or $b == 'spock'){
            $a=1;
        }
        else if($b == 'lagarto' or $b == 'tesoura'){
            $b=1;
        }
        else{
            $empate=1;
        }
    }
    if($a == 'pedra'){
        if($b == 'lagarto' or $b == 'tesoura'){
            $a=1;
        }
        else if($b == 'papel' or $b == 'spock'){
            $b=1;
        }
        else{
            $empate=1;
        }
    }
    if($a == 'lagarto'){
        if($b == 'spock' or $b == 'papel'){
            $a=1;
        }
        else if($b == 'pedra' or $b == 'tesoura'){
            $b=1;
        }
        else{
            $empate=1;
        }
    }
    if($a == 'spock'){
        if($b == 'tesoura' or $b == 'pedra'){
            $a=1;
        }
        else if($b == 'lagarto' or $b == 'papel'){
            $b=1;
        }
        else{
            $empate=1;
        }
    }
    if($a==1){
        echo "rajesh\n";
    }
    if($b==1){
        echo "sheldon\n";
    }
    if($empate==1){
        echo "empate\n";
    }
}
?>