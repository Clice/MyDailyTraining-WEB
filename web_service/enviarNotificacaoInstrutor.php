<?php

require 'conexao.php';
ini_set('default_charset', 'UTF-8');

$idInstrutor = $_POST['idInstrutor'];

//$idInstrutor = 66;

$buscarTokenInstrutor = "SELECT tokenUsuario FROM tokens WHERE idUsuario = ?";
$rsBuscarTokenInstrutor = $PDO->prepare($buscarTokenInstrutor);
$rsBuscarTokenInstrutor->bindParam(1, $idInstrutor);
$rsBuscarTokenInstrutor->execute();

while ($dadosToken = $rsBuscarTokenInstrutor->fetch(PDO::FETCH_ASSOC)) {
    $tokenInstrutor = $dadosToken['tokenUsuario'];
}

define('API_ACCESS_KEY', 'AIzaSyBzpNepTsuoPrlxk79DOi54WfHjwo_QDto');

$idAluno = $_POST['idAluno'];

$buscarNomeAluno = "SELECT nomeAluno FROM alunos WHERE idAluno = ?";
$rsBuscarNomeAluno = $PDO->prepare($buscarNomeAluno);
$rsBuscarNomeAluno->bindParam(1, $idAluno);
$rsBuscarNomeAluno->execute();

while ($dadosAluno = $rsBuscarNomeAluno->fetch(PDO::FETCH_ASSOC)) {
    $nomeAluno = $dadosAluno['nomeAluno'];
}



$registrationIds = ["$tokenInstrutor"];

$msg = [
    'title' => "Novo Chamado",
    'body' => "$nomeAluno está solicitando seu atendimento"
];

$fields = [
    'registration_ids' => $registrationIds,
    'notification' => $msg
];

$headers = [
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
];

$fields = json_encode($fields);

$ch = curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
curl_close($ch);

print_r($result);
