<?php

include ("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios(usuario, senha) VALUES ('$usuario', '$senha')";

if(mysqli_query($conexao, $sql))
    echo "Cadastro realizado com sucesso!";
else
    echo "Erro!".mysqli_connect_error($conexao);

mysqli_close($conexao);

?>