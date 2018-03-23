<?php
require 'conexao.php';

/*
$nomeCliente = $_POST['nomeCliente'];
$cpfCliente = $_POST['cpfCliente'];
$senhaCliente = $_POST['senhaCliente'];
$emailCliente = $_POST['emailCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$numeroCliente = $_POST['numeroCliente'];
$bairroCliente = $_POST['bairroCliente'];
$complementoCliente = $_POST['complementoCliente'];
$cidadeCliente = $_POST['cidadeCliente'];*/
$nomeCliente = 'joseph';
$cpfCliente = '2113131';
$senhaCliente = '123';
$emailCliente = 'dasdaa';
$enderecoCliente = '12312';
$numeroCliente = '123';
$bairroCliente = 'sd';
$complementoCliente = 'casa';
$cidadeCliente = 'crato';


$senhaCriptografada = base64_encode($senhaCliente); // criptografia base64 da senha

$query = "INSERT INTO cliente (emailCliente,senhaCliente,nomeCliente,cpfCliente,enderecoCliente,numeroCliente,bairroCliente
,complementoCliente,cidadeCliente) VALUES (?,?,?,?,?,?,?,?,?)";

$pdo = $PDO->prepare($query);
$pdo->bindParam(1,$emailCliente);
$pdo->bindParam(2,$senhaCriptografada);
$pdo->bindParam(3,$nomeCliente);
$pdo->bindParam(4,$cpfCliente);
$pdo->bindParam(5,$enderecoCliente);
$pdo->bindParam(6,$numeroCliente);
$pdo->bindParam(7,$bairroCliente);
$pdo->bindParam(8,$complementoCliente);
$pdo->bindParam(9,$cidadeCliente);
$response = array();

if($pdo->execute()){
    $response["ok"] = true;
    echo json_encode($response);

}else{
    $response["ok"] = false;
    echo json_encode($response);

}













