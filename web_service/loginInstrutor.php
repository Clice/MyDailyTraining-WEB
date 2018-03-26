<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$loginUsuario = $_POST['loginUsuario'];
//$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
//$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode($_POST['senhaUsuario']);

//$loginUsuario = '748.671.329-26';
//$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
//$loginUsuario = base64_encode($loginUsuario);
//$senhaUsuario = base64_encode('111111');

$sqlUsuario = "SELECT * FROM usuarios INNER JOIN academias ON usuarios.idAcademia = academias.idAcademia "
        . "WHERE usuarios.cpfUsuario = ? AND usuarios.senhaUsuario = ?";
$rsLogin = $PDO->prepare($sqlUsuario);
$rsLogin->bindParam(1, $loginUsuario);
$rsLogin->bindParam(2, $senhaUsuario);
$rsLogin->execute();

if ($rsLogin->rowCount() > 0) {
    while ($dados = $rsLogin->fetch(PDO::FETCH_ASSOC)) {
        $idInstrutor = $dados['idUsuario'];
        $idAcademia = $dados['idAcademia'];
        $nomeInstrutor = $dados['nomeUsuario'];
        $emailInstrutor = $dados['emailUsuario'];
        $loginInstrutor = base64_decode($dados['loginUsuario']);
        $senhaInstrutor = base64_decode($dados['senhaUsuario']);
        $enderecoInstrutor = $dados['enderecoUsuario'];
        $telefoneInstrutor = $dados['telefoneUsuario'];
        $statusInstrutor = $dados['statusUsuario'];
        $statusAcademia = $dados['statusAcademia'];
        $sexoInstrutor = $dados['sexoUsuario'];
    }

    if ($statusAcademia == 0) {
        echo "academiaBloqueada";
    } else if ($statusInstrutor == 1) {
        echo "instrutorBloqueado";
    } else {
        echo "loginSucesso" . "/" . $idInstrutor . "/" . $idAcademia . "/" . $nomeInstrutor . "/" . $emailInstrutor
        . "/" . $loginInstrutor . "/" . $senhaInstrutor . "/" . $enderecoInstrutor . "/" . $telefoneInstrutor
        . "/" . $sexoInstrutor;
    }
} else {
    echo "loginErro";
}
