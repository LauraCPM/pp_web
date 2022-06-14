<?php

include ("./conexao.php");

$nome = $_POST['name'];
$nascimento = $_POST['nasc'];
$email = $_POST['email'];
$senha = $_POST['pass'];

$sql = "INSERT INTO usuarios(nome, nascimento, email, senha) VALUES ('$nome', '$nascimento', '$email', '$senha')";

if(mysqli_query($conexao, $sql))
    echo "Cadastro realizado com sucesso!";
else
    echo "Erro!".mysqli_connect_error($conexao);

mysqli_close($conexao);

?>