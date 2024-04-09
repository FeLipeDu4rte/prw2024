<?php
$linha = intval(fgets(STDIN));
$coluna = intval(fgets(STDIN));
if(($linha+$coluna) % 2 == 0){
    echo "1\n";
}
else{
    echo "0\n";
}
?>