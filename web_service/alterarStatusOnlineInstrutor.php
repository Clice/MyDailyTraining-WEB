<?php

require 'conexao.php';

$idInstrutor = $_POST['idUsuario'];

$alterarStatusInstrutor = "UPDATE tokens SET statusInstrutor = 1 WHERE idUsuario = ?";
$rsAlterarStatusInstrutor = $PDO->prepare($alterarStatusInstrutor);
$rsAlterarStatusInstrutor->bindParam(1, $idInstrutor);
$rsAlterarStatusInstrutor->execute();

if ($rsAlterarStatusInstrutor->rowCount() > 0) {
    echo "statusInstrutorOnline";
} else {
    echo "erroStatusInstrutor";
}