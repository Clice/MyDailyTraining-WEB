<?php

ini_set('default_charset', 'UTF-8');

require 'conexao.php';

$idAluno = $_POST['idAluno'];
$senhaAluno = $_POST['senhaAluno'];
$senhaCriptografada = base64_encode($senhaAluno);

$alterarSenha = "UPDATE alunos SET senhaAluno = ? WHERE idAluno = ?";
$rsAlterarSenha = $PDO->prepare($alterarSenha);
$rsAlterarSenha->bindParam(1, $senhaCriptografada);
$rsAlterarSenha->bindParam(2, $idAluno);
$rsAlterarSenha->execute();

if ($rsAlterarSenha->rowCount() > 0) {
    echo "success";
} else {
    echo "error";
}