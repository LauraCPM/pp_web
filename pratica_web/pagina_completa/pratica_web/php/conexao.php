<?php

$servidor = "localhost";
$bdname = "cadastro";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname);

if(!$conexao)
    die("Problemas com a conexão");
   

?>