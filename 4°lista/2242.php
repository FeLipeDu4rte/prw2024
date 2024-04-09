<?php
function risadas($risadas){
    $risadas = strtolower($risadas);
    $risada_corrigida = preg_replace("/[bcdfghjklmnpqrstvwxyz]/", '', $risadas);
    if($risada_corrigida == strrev($risada_corrigida)){
        return "S";
    }else{
        return "N";
    }
}

$risadas = readline();
echo risadas($risadas) . "\n";
?>