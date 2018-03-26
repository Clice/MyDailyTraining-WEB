<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$idAluno = $_POST['idAluno'];
$emailAluno = $_POST['emailAluno'];
$senhaAluno = base64_encode($_POST['senhaAluno']);
$enderecoAluno = $_POST['enderecoAluno'];
$telefoneAluno = $_POST['telefoneAluno'];

$alterarDados = "UPDATE alunos SET emailAluno = ?, senhaAluno = ?, enderecoAluno = ?, telefoneAluno = ? WHERE idAluno = ?";
$rsAlterarDados = $PDO->prepare($alterarDados);
$rsAlterarDados->bindParam(1, $emailAluno);
$rsAlterarDados->bindParam(2, $senhaAluno);
$rsAlterarDados->bindParam(3, $enderecoAluno);
$rsAlterarDados->bindParam(4, $telefoneAluno);
$rsAlterarDados->bindParam(5, $idAluno);
$rsAlterarDados->execute();

if ($rsAlterarDados) {
    echo "success";
} else {
    echo "error";
}
