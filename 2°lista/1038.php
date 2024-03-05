<?php
list($a, $b) = explode(" ", readline());

switch ($a) {
    case 1:
        $a = $b * 4;
        echo "Total: R$ ".number_format($a, 2, ".", "")."\n";
        break;
    case 2:
        $a = $b * 4.5;
        echo "Total: R$ ".number_format($a, 2, ".", "")."\n";
        break;
    case 3:
        $a = $b * 5;
        echo "Total: R$ ".number_format($a, 2, ".", "")."\n";
        break;
    case 4:
        $a = $b * 2;
        echo "Total: R$ ".number_format($a, 2, ".", "")."\n";
        break;
    case 5:
        $a = $b * 1.5;
        echo "Total: R$ ".number_format($a, 2, ".", "")."\n";
        break;
    
    default:
        break;
}
?>