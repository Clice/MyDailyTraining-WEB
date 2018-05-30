<?php

require '../conexao.php';

$limparChamadosAntigos = "TRUNCATE chamados";
$rsLimparChamadosAntigos = $PDO->prepare($limparChamadosAntigos);
$rsLimparChamadosAntigos->execute();

$arquivo = dirname(__FILE__) . '../resultados/resultadoLimpezaChamadosAntigos.txt';

if ($rsLimparChamadosAntigos) {
    $informacao = "Sucesso, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
} else {
    $informacao = "***Erro, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
}

echo $informacao;

file_put_contents($arquivo, $informacao, FILE_APPEND);
