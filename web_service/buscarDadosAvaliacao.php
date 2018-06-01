<?php

require 'conexao.php';

$idAluno = $_POST['idAluno'];
$parteCorpoAluno = $_POST['parteCorpoAluno'];

$buscarDadosAvaliacao = "SELECT " . $parteCorpoAluno . ",dataAvaliacaoFisica FROM avaliacoesfisicas "
        . "WHERE idAluno = ? ORDER BY dataAvaliacaoFisica DESC LIMIT 4 ";
$rsBuscarDadosAvaliacao = $PDO->prepare($buscarDadosAvaliacao);
$rsBuscarDadosAvaliacao->bindParam(1, $idAluno);
$rsBuscarDadosAvaliacao->execute();

if ($rsBuscarDadosAvaliacao->rowCount() > 0) {
    while ($dadosAvaliacao = $rsBuscarDadosAvaliacao->fetch(PDO::FETCH_ASSOC)) {
        $vetor[] = $dadosAvaliacao[$parteCorpoAluno];
        $dataAvaliacaoFisica = $dadosAvaliacao['dataAvaliacaoFisica'];
        $dataAvaliacaoFisica = implode("/", array_reverse(explode("-", trim($dataAvaliacaoFisica))));
        $vetor[] = $dataAvaliacaoFisica;
    }

    $vetorTratado = array_reverse($vetor);

    $formatado = implode(',', $vetorTratado);
    echo "buscaSuccess," . $formatado;
} else {
    echo "buscaError";
}