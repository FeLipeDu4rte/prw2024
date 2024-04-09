<?php
$n = intval(fgets(STDIN));
for ($i=0; $i<$n; $i++)
{   
    $cifras = fgets(STDIN);
    $cifra = str_split($cifras);
    $m = intval(fgets(STDIN));
    $quantidade = count($cifra);
    for ($x=0; $x < $quantidade; $x++)
    {
        $num = ord($cifra[$x]);
        if (($num - $m) < 65)
        {
            $letra = chr(($num - $m) + 26);
        }
        else
        {
            $letra = chr($num - $m);
        }
        if($x < $quantidade-1){
            echo $letra;
        }
    }
    echo "\n";
}
?>