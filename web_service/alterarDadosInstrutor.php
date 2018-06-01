<?php

ini_set('default_charset', 'UTF-8');

require 'conexao.php';

$idUsuario = $_POST['idUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = base64_encode($_POST['senhaUsuario']);
$enderecoUsuario = $_POST['enderecoUsuario'];
$telefoneUsuario = $_POST['telefoneUsuario'];
$cidadeUsuario = $_POST['cidadeUsuario'];
$cepUsuario = $_POST['cepUsuario'];
$bairroUsuario = $_POST['bairroUsuario'];
$estadoUsuario = $_POST['estadoUsuario'];

$endereco = utf8_encode($cidadeUsuario);
$cidade = utf8_encode($cepUsuario);
$bairro = utf8_encode($bairroUsuario);
$estado = utf8_encode($estadoUsuario);

$alterarDadosInstrutor = "UPDATE usuarios SET emailUsuario = ?, senhaUsuario = ?, enderecoUsuario = ?, "
        . "telefoneUsuario = ?, cidadeUsuario = ?, cepUsuario = ?, bairroUsuario = ?, estadoUsuario = ? "
        . "WHERE idUsuario = ? AND tipoConta = 4";        
$rsAlterarDadosInstrutor = $PDO->prepare($alterarDadosInstrutor);
$rsAlterarDadosInstrutor->bindParam(1, $emailUsuario);
$rsAlterarDadosInstrutor->bindParam(2, $senhaUsuario);
$rsAlterarDadosInstrutor->bindParam(3, $endereco);
$rsAlterarDadosInstrutor->bindParam(4, $telefoneUsuario);
$rsAlterarDadosInstrutor->bindParam(5, $cidade);
$rsAlterarDadosInstrutor->bindParam(6, $cepUsuario);
$rsAlterarDadosInstrutor->bindParam(7, $bairro);
$rsAlterarDadosInstrutor->bindParam(8, $estado);
$rsAlterarDadosInstrutor->bindParam(9, $idUsuario);
$rsAlterarDadosInstrutor->execute();

if ($rsAlterarDadosInstrutor->rowCount() > 0) {
    echo "success";
} else {
    echo "error";
}
