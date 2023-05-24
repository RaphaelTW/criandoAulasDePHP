<?php
$servidor = '127.0.0.1'; // nosso servirdor web local
$usuario = 'root'; // usuário do mysql
$senha = ''; // senha
$bancoDados = 'curdo_php'; // nome do banco de dados

$conexao = mysqli_connect($servidor, $senha, $bancoDados);

if (mysqli_connect_errno($conexao)) {
    echo "Problema para conectar no banco: verificar os dados!";
} else {
    echo "Conexão realizada com suceso";
}
