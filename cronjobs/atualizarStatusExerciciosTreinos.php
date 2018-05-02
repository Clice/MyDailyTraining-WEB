<?php

require 'conexao.php';

$atualizacaoStatusExerciciosTreinos = "UPDATE exerciciostreino SET statusExercicioTreino = false";
$rsAtualizacaoStatusExerciciosTreinos = $PDO->prepare($atualizacaoStatusExerciciosTreinos);
$rsAtualizacaoStatusExerciciosTreinos->execute();

$arquivo = dirname(__FILE__) . '/resultadoAtualizacaoStatusExerciciosTreinos.txt';

if ($rsAtualizacaoStatusExerciciosTreinos) {
    $informacao = "Sucesso, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
} else {
    $informacao = "***Erro, " . implode("/", array_reverse(explode("-", trim(date('Y-m-d'))))) . " " . date('H:i:s') . "\n";
}

echo $informacao;

file_put_contents($arquivo, $informacao, FILE_APPEND);
