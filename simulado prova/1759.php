<?php
$n = intval(fgets(STDIN));
for($i=1; $i<=$n; $i++){
    if($i == $n){
        echo "Ho!\n";
    }
    else{
        echo "Ho ";
    }
}
?>