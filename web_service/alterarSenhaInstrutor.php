<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$idUsuario = $_POST['idUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];
$senhaCriptografada = base64_encode($senhaUsuario);

$alterarSenha = "UPDATE usuarios SET senhaUsuario = ? WHERE idUsuario = ? AND tipoConta = 4";
$rsAlterarSenha = $PDO->prepare($alterarSenha);
$rsAlterarSenha->bindParam(1, $senhaCriptografada);
$rsAlterarSenha->bindParam(2, $idAluno);
$rsAlterarSenha->execute();

if ($rsAlterarSenha) {
    echo "success";
} else {
    echo "error";
}