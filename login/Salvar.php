<?php

define('CAMINHO_ARQUIVO', 'cadastros.txt');

$nome = (string) $_POST['nome'];
$cpf = (string) $_POST['cpf'];

$arquivo = file_exists(CAMINHO_ARQUIVO)
    ? fopen(CAMINHO_ARQUIVO, 'a')
    : fopen(CAMINHO_ARQUIVO, 'w');

fwrite($arquivo, 'Nome: ' . $nome . "\n");
fwrite($arquivo, 'CPF: ' . $cpf . "\n");

fclose($arquivo);

header('location: cadastro.php');
?>