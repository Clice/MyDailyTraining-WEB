<?php

require 'conexao.php';

$idInstrutor = $_POST['idUsuario'];
$tokenInstrutorAtual = $_POST['tokenUsuario'];

//$idInstrutor = 66;
//$tokenInstrutorAtual = "f0couPbU374:APA91bGmj_VJrV0XoaqlPZWvBJ_UganSdahDSYzngJIbb6yP7FBtT21RL-pF3yrba5FWcsgdQvM8iC3oOw3szQJQPV-69tF7xNzi8Y48qBKmTESA3L04mexCJ2lc8Z2RPopx6_nD-rWO";

$buscarTokenInstrutor = "SELECT tokens.tokenUsuario FROM tokens INNER JOIN usuarios ON tokens.idUsuario = usuarios.idUsuario WHERE usuarios.idUsuario = ?";
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
