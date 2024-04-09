<?php
while($x = intval(readline())){
    if($x%2!=0){
        $esp1=($x-1)/2;
        $esp2=$esp1;
        $z=$x-$esp1;
        $folha1=1;
        $folha2=1;
        for($i=0; $i<$z; $i++){
            echo str_repeat(' ', $esp1).str_repeat('*',$folha1)."\n";
            $esp1-=1;
            $folha1+=2;
            if($i==$z-1){
                echo str_repeat(' ', $esp2).str_repeat('*',$folha2)."\n";
                $esp2-=1;
                $folha2+=2;
                echo str_repeat(' ', $esp2).str_repeat('*',$folha2)."\n";
                echo "\n";
            }
        }
    }
}