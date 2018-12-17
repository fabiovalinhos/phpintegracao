<?php
//    Passo 1 - Abrir conexão
$servidor = "localhost";
$usuario =  "fabiovalinhos";
$senha =    "cebola";
$banco =    "fase3";

$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

//Passo 2 -Testar conexão
if (mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
}
?>
