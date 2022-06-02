<?php

$nome = $_POST['name'];
$genero = $_POST['email'];
$estado = $_POST['estado'];
$qtdIrmaos = $_POST['pwd'];
foreach ($qtdIrmaos as $val)
{
    $msg .= $val . ", ";
}

echo "O nome é $nome, o email é $email, e a senha é $senha .";

?>