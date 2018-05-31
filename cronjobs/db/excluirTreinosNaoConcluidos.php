<?php

require '../conexao.php';

$excluirTreinosNaoConcluidos = "DELETE FROM treinos WHERE statusTreino = false";
$rsExcluirTreinosNaoConcluidos = $PDO->prepare($excluirTreinosNaoConcluidos);
$rsExcluirTreinosNaoConcluidos->execute();

$arquivo = dirname(__FILE__) . '../resultados/resultadoExclusaoTreinosNaoConcluidos.txt';

if ($rsExcluirTreinosNaoConcluidos) {
    $informacao = "Sucesso, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
} else {
    $informacao = "***Erro, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
}

echo $informacao;

file_put_contents($arquivo, $informacao, FILE_APPEND);
