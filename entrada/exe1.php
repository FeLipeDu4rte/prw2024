<?php

$name= $_GET["name"];
$email= $_GET["email"];
$senha= $_GET["senha"];

$pass=123;
if ($senha==$pass)
{
    echo "logado com sucesso <br>";
    echo $name."<br>";
    echo $email."<br>";
    echo $senha."<br>";
}
else
{
    echo "Senha/email invalido Tente outra vez<br>";
    echo '<a href="entrada.html">Voltar</a>';
}
