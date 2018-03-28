<?php

require 'conexao.php';
date_default_timezone_set("America/Fortaleza");
ini_set('default_charset', 'UTF-8');

$idAluno = $_POST['idAluno'];

//$idAluno = 3;

$diasdasemana = array(1 => "segunda", 2 => "terca", 3 => "quarta", 4 => "quinta", 5 => "sexta", 6 => "sabado", 0 => "domingo");

$hoje = getdate();
$dia = $hoje["mday"];
$diadasemana = $hoje["wday"];
$nomediadasemana = $diasdasemana[$diadasemana];

//$nomediadasemana = "segunda";

$buscarExerciciosAluno = "SELECT exerciciostreino.idExercicioTreino, exercicios.nomeExercicio, exerciciostreino.serieExercicioTreino, exerciciostreino.cargaExercicioTreino, exerciciostreino.descansoExercicioTreino, exerciciostreino.repeticoesExercicioTreino, exerciciostreino.statusExercicioTreino FROM treinos INNER JOIN exerciciostreino ON treinos.idTreino = exerciciostreino.idTreino INNER JOIN exercicios ON exercicios.idExercicio = exerciciostreino.idExercicio WHERE treinos.idAluno = ? AND treinos." . $nomediadasemana . " = true";
$rsBuscarExercicioAluno = $PDO->prepare($buscarExerciciosAluno);
$rsBuscarExercicioAluno->bindParam(1, $idAluno);
$rsBuscarExercicioAluno->execute();

if ($rsBuscarExercicioAluno->rowCount() > 0) {

    while ($dadosExercicio = $rsBuscarExercicioAluno->fetch(PDO::FETCH_ASSOC)) {
        $vetor[] = $dadosExercicio['nomeExercicio'];
        $vetor[] = $dadosExercicio['serieExercicioTreino'];
        $vetor[] = $dadosExercicio['repeticoesExercicioTreino'];
        $vetor[] = $dadosExercicio['cargaExercicioTreino'];
        $vetor[] = $dadosExercicio['descansoExercicioTreino'];
        $vetor[] = $dadosExercicio['statusExercicioTreino'];
        $vetor[] = $dadosExercicio['idExercicioTreino'];
    }

    $vetorFormatado = implode('/', $vetor);

    echo "exercicioSuccess/" . $vetorFormatado;
} else {
    echo "nenhumExercicio";
}
