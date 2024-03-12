<?php
$z = 0;
for ($i =1; $i<=100; $i++){
    $y = intval(readline());
    if ($y > $z){
        $z = $y;
        $v = $i;
    }
}
printf($z."\n");
printf($v."\n");
?>