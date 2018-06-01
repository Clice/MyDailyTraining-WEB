<?php

require 'conexao.php';

date_default_timezone_set("America/Fortaleza");

ini_set('default_charset', 'UTF-8');

$idInstrutor = $_POST['idInstrutor'];
$idAcademia = $_POST['idAcademia'];
$dataAual = date('Y-m-d');

$listarChamados = "SELECT alunos.nomeAluno, chamados.horarioChamado FROM chamados INNER JOIN usuarios "
        . "ON chamados.idUsuario = usuarios.idUsuario INNER JOIN alunos ON chamados.idAluno = alunos.idAluno "
        . "WHERE chamados.idUsuario = ? AND chamados.idAcademia = ? AND chamados.dataChamado = ? "
        . "ORDER BY chamados.horarioChamado ASC";
$rsListarChamados = $PDO->prepare($listarChamados);
$rsListarChamados->bindParam(1, $idInstrutor);
$rsListarChamados->bindParam(2, $idAcademia);
$rsListarChamados->bindParam(3, $dataAual);
$rsListarChamados->execute();

if ($rsListarChamados) {
    if ($rsListarChamados->rowCount() > 0) {
        while ($dadosChamado = $rsListarChamados->fetch(PDO::FETCH_ASSOC)) {
            $vetor[] = $dadosChamado['nomeAluno'];
            $vetor[] = $dadosChamado['horarioChamado'];
        }

        $formatado = implode(',', $vetor);
        echo "chamadoSuccess," . $formatado;
    } else if ($rsListarChamados->rowCount() == 0) {
        echo "nenhumChamado";
    }
} else {
    echo "error";
}