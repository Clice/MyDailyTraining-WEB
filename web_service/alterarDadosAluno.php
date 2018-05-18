<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$idAluno = $_POST['idAluno'];
$emailAluno = $_POST['emailAluno'];
$enderecoAluno = $_POST['enderecoAluno'];
$telefoneAluno = $_POST['telefoneAluno'];
$cidadeAluno = $_POST['cidadeAluno'];
$cepAluno = $_POST['cepAluno'];
$bairroAluno = $_POST['bairroAluno'];
$estadoAluno = $_POST['estadoAluno'];

$endereco = utf8_encode($enderecoAluno);
$cidade = utf8_encode($cidadeAluno);
$bairro = utf8_encode($bairroAluno);
$estado = utf8_encode($estadoAluno);

$alterarDados = "UPDATE alunos SET emailAluno = ?, enderecoAluno = ?, telefoneAluno = ?, cidadeAluno = ?, cepAluno = ?, bairroAluno = ?, estadoAluno = ? WHERE idAluno = ?";
$rsAlterarDados = $PDO->prepare($alterarDados);
$rsAlterarDados->bindParam(1, $emailAluno);
$rsAlterarDados->bindParam(2, $endereco);
$rsAlterarDados->bindParam(3, $telefoneAluno);
$rsAlterarDados->bindParam(4, $cidade);
$rsAlterarDados->bindParam(5, $cepAluno);
$rsAlterarDados->bindParam(6, $bairro);
$rsAlterarDados->bindParam(7, $estado);
$rsAlterarDados->bindParam(8, $idAluno);
$rsAlterarDados->execute();

if ($rsAlterarDados->rowCount() > 0) {
    echo "success";
} else {
    echo "error";
}