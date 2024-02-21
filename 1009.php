<?php
    $name=readline();
    $sal=floatval(readline());
    $tv=floatval(readline());

    $tv = (($tv/100) * 15);
    $X = $sal+$tv;
    $X = number_format($X, 2, ".", "");

    echo "TOTAL = R$ $X\n";
?>