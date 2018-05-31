<?php

require './conexao.php';

$quatroMesesAtras = date("m") - 4;

if ($quatroMesesAtras < 10) {
    $excluirAvaliacoesFisicasAntigas = "DELETE FROM avaliacoesfisicas "
            . "WHERE dataAvaliacaoFisica LIKE '%-0" . $quatroMesesAtras . "-%'";
} else {
    $excluirAvaliacoesFisicasAntigas = "DELETE FROM avaliacoesfisicas "
            . "WHERE dataAvaliacaoFisica LIKE '%-" . $quatroMesesAtras . "-%'";
}

$rsExcluirAvaliacoesFisicasAntigas = $PDO->prepare($excluirAvaliacoesFisicasAntigas);
$rsExcluirAvaliacoesFisicasAntigas->execute();

$arquivo = dirname(__FILE__) . '../resultados/resultadoExclusaoAvaliacoesFisicasAntigas.txt';

if ($rsExcluirAvaliacoesFisicasAntigas) {
    $informacao = "Sucesso, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
} else {
    $informacao = "***Erro, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
}

echo $informacao;

file_put_contents($arquivo, $informacao, FILE_APPEND);
