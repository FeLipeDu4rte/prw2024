<?php
function vertebrado($tipo1, $tipo2){
    if($tipo1 == "ave"){
        if($tipo2 == "carnivoro"){
            echo "aguia\n";
        }
        else{
            echo "pomba\n";
        }
    }
    else{
        if($tipo2 == "onivoro"){
            echo "homem\n";
        }
        else{
            echo "vaca\n";
    }
    }
}

function invertebrado($tipo1, $tipo2){
    if($tipo1 == "inseto"){
        if($tipo2 == "hematofago"){
            echo "pulga\n";
        }
        else{
            echo "lagarta\n";
        }
    }
    else{
        if($tipo2 == "hematofago"){
            echo "sanguessuga\n";
        }
        else{
            echo "minhoca\n";
    }
    }
}

$tipo = readline();
$tipo1 = readline();
$tipo2 = readline();

if($tipo == "vertebrado"){
    vertebrado($tipo1,$tipo2);
}
else{
    invertebrado($tipo1,$tipo2);
}
?>