<?php

require 'conexao.php';

date_default_timezone_set("America/Fortaleza");

$idAluno = $_POST['idAluno'];
$idAcademia = $_POST['idAcademia'];
$idInstrutor = $_POST['idUsuario'];
$dataChamado = date("Y-m-d");
$horarioChamado = date("H:i:s");

//$idAluno = 3;
//$idAcademia = 2;
//$idInstrutor = $_POST['idUsuario'];
//$dataChamado = date("Y-m-d");
//$horarioChamado = date("H:i:s");

$salvarChamado = "INSERT INTO chamados (idAluno,idUsuario,idAcademia,dataChamado,horarioChamado) VALUES (?,?,?,?,?)";
$rsSalvarChamado = $PDO->prepare($salvarChamado);
$rsSalvarChamado->bindParam(1, $idAluno);
$rsSalvarChamado->bindParam(2, $idInstrutor);
$rsSalvarChamado->bindParam(3, $idAcademia);
$rsSalvarChamado->bindParam(4, $dataChamado);
$rsSalvarChamado->bindParam(5, $horarioChamado);
$rsSalvarChamado->execute();

if ($rsSalvarChamado) {
    echo "chamadoSuccess";
} else {
    echo "chamadoError";
}
?>