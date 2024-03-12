<?php
list($a, $b) = explode(' ', readline());

if($a == $b){
    echo "O JOGO DUROU 24 HORA(S)\n";
}
elseif($a > $b){
  $dif = 24-$a +$b;
  echo "O JOGO DUROU $dif HORA(S)\n";
}
else{
  $dif = $b -$a; 
  echo "O JOGO DUROU $dif HORA(S)\n";
}
?>