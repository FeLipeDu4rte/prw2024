<?php
$x = intval(readline());
if($x%2==0){
    $x-=1;
    for($i = 0;$i <6; $i++){
        $x+=2;
        echo $x."\n";
    }
}else{
    echo $x."\n";
    for($i = 0;$i <5; $i++){
        $x+=2;
        echo $x."\n";
    }
}
?>