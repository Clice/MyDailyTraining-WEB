<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$idUsuario = $_POST['idUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = base64_encode($_POST['senhaUsuario']);
$enderecoUsuario = $_POST['enderecoUsuario'];
$telefoneUsuario = $_POST['telefoneUsuario'];

$alterarDadosInstrutor = "UPDATE usuarios SET emailUsuario = ?, senhaUsuario = ?, enderecoUsuario = ?, telefoneUsuario = ? WHERE idUsuario = ? AND tipoConta = 4";
$rsAlterarDadosInstrutor = $PDO->prepare($alterarDadosInstrutor);
$rsAlterarDadosInstrutor->bindParam(1, $emailUsuario);
$rsAlterarDadosInstrutor->bindParam(2, $senhaUsuario);
$rsAlterarDadosInstrutor->bindParam(3, $enderecoUsuario);
$rsAlterarDadosInstrutor->bindParam(4, $telefoneUsuario);
$rsAlterarDadosInstrutor->bindParam(5, $idUsuario);
$rsAlterarDadosInstrutor->execute();

if ($rsAlterarDadosInstrutor->rowCount() > 0) {
    echo "success";
} else {
    echo "error";
}