<?php
    $fun = intval(readline());
    $ht = floatval(readline());
    $vlh = floatval(readline());

    $sal = $ht * $vlh;
    $sal = number_format($sal, 2, ".", "");

    echo "NUMBER = $fun\n";
    echo "SALARY = U$ $sal\n";
?>