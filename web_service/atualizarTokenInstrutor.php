<?php

require 'conexao.php';

$idInstrutor = $_POST['idUsuario'];
$tokenInstrutorAtual = $_POST['tokenUsuario'];

$buscarTokenInstrutor = "SELECT tokens.tokenUsuario FROM tokens INNER JOIN usuarios "
        . "ON tokens.idUsuario = usuarios.idUsuario WHERE usuarios.idUsuario = ?";
$rsBuscarTokenInstrutor = $PDO->prepare($buscarTokenInstrutor);
$rsBuscarTokenInstrutor->bindParam(1, $idInstrutor);
$rsBuscarTokenInstrutor->execute();

if ($rsBuscarTokenInstrutor->rowCount() > 0) {
    while ($dadosInstrutor = $rsBuscarTokenInstrutor->fetch(PDO::FETCH_ASSOC)) {
        $tokenInstrutorBanco = $dadosInstrutor['tokenUsuario'];
    }

    if ($tokenInstrutorAtual != $tokenInstrutorBanco) {
        $atualizarToken = "UPDATE tokens SET tokenUsuario = ? WHERE idUsuario = ?";
        $rsAtualizarToken = $PDO->prepare($atualizarToken);
        $rsAtualizarToken->bindParam(1, $tokenInstrutorAtual);
        $rsAtualizarToken->bindParam(2, $idInstrutor);
        $rsAtualizarToken->execute();

        if ($rsAtualizarToken->rowCount() > 0) {
            echo "tokenAtualizadoSucesso";
        }
    }
} else {
    $cadastrarToken = "INSERT INTO tokens (idUsuario,tokenUsuario) VALUES (?,?)";
    $rsCadastrarToken = $PDO->prepare($cadastrarToken);
    $rsCadastrarToken->bindParam(1, $idInstrutor);
    $rsCadastrarToken->bindParam(2, $tokenInstrutorAtual);
    $rsCadastrarToken->execute();

    if ($rsCadastrarToken->rowCount() > 0) {
        echo "cadastroTokenSuccess";
    } else {
        echo "cadastroTokenError";
    }
}