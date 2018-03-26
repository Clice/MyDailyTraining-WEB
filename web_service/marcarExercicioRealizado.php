<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$idExercicioTreino = $_POST['idExercicioTreino'];

$marcarExercicio = "UPDATE exerciciostreino SET statusExercicioTreino = 1 WHERE idExercicioTreino = ?";
$rsMarcarExercicio = $PDO->prepare($marcarExercicio);
$rsMarcarExercicio->bindParam(1, $idExercicioTreino);
$rsMarcarExercicio->execute();

if ($rsMarcarExercicio) {
    echo "successExercicio";
} else {
    echo "errorExercicio";
}
