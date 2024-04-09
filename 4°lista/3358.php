<?php
function achar_consoante($sobrenome ) {
    $conta = 0;
    for ($i = 0; $i < strlen($sobrenome ); $i++) {
        $letra = $sobrenome[$i];
        $letra = strtolower($letra);
        if (ctype_upper($letra) && !ctype_alpha($letra) || $letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $conta = 0;
        } else {
            $conta++;
            if ($conta >= 3) {
                return false;
            }
        }
    }
    return true;
}

$N = intval(readline());

for ($i = 0; $i < $N; $i++) {
    $sobrenome  = readline();
    if (achar_consoante($sobrenome )) {
        echo "$sobrenome eh facil\n";
    } else {
        echo "$sobrenome nao eh facil\n";
    }
}
?>