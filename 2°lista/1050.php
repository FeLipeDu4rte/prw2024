<?php
function DDD($ddd){
    if($ddd > 30){
        if($ddd == 31){
            echo "Belo Horizonte\n";
        }
        elseif($ddd == 32){
            echo "Juiz de Fora\n";
        }
        elseif($ddd == 61){
            echo "Brasilia\n";
        }
        elseif($ddd == 71){
            echo "Salvador\n";
        }else{
            echo "DDD nao cadastrado\n";
        }
    }
    elseif($ddd <= 30){
        if($ddd == 27){
            echo "Vitoria\n";
        }
        elseif($ddd == 21){
            echo "Rio de Janeiro\n";
        }
        elseif($ddd == 19){
            echo "Campinas\n";
        }
        elseif($ddd == 11){
            echo "Sao Paulo\n";
        }else{
            echo "DDD nao cadastrado\n";
        }
    }
}

$ddd = intval(readline());

DDD($ddd)
?>