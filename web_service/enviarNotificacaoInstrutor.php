<?php

define('API_ACCESS_KEY', 'AIzaSyBzpNepTsuoPrlxk79DOi54WfHjwo_QDto');

//$tokenInstrutor = "davl59DDSrE:APA91bHH96Yap7PBjG06P1K3joMvKEiZfXyZ4X8sExynfBNw8wkfrQ-yET4mlHVbsVPD9L_jBfznsKx9YF3ZSSgXQsMt07mTl9MfXf6JyDE1J-b3UTttrSAS9L_raSlwOwkMgyUhpmf5";

$nomeAluno = "Lucas";

//$nomeAluno = $_POST['nomeAluno'];
$tokenInstrutor = $_POST['tokenInstrutor'];

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
