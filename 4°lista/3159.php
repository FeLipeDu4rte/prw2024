<?php
$n = intval(readline());
$l = ['a' => '2', 'b' => '22', 'c' => '222', 'd' => '3', 'e' => '33', 'f' => '333', 'g' => '4', 'h' => '44', 'i' => '444', 'j' => '5', 'k' => '55', 'l' => '555', 'm' => '6', 'n' => '66', 'o' => '666', 'p' => '7', 'q' => '77', 'r' => '777', 's' => '7777', 't' => '8', 'u' => '88', 'v' => '888', 'w' => '9', 'x' => '99', 'y' => '999', 'z' => '9999', " " => '0'];
for ($i = 0; $i < $n; $i++) {
    $respo = "";
    $palav = str_split(readline());
    for ($k = 0; $k < count($palav); $k++) {
        if ($k != 0)
            if (substr($l[strtolower($palav[$k])], 0, 1) == substr($l[strtolower($palav[$k - 1])], 0, 1) && !ctype_upper($palav[$k]))
                $respo .= '*';
        if (ctype_upper($palav[$k])){
            $respo .= '#' . $l[strtolower($palav[$k])];
        }
        else{
            $respo .= $l[$palav[$k]];
        }
    }
    echo "$respo\n";
}
?>