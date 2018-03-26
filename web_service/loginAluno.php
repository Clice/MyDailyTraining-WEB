<?php

ini_set('default_charset', 'UTF-8');
require 'conexao.php';

$loginUsuario = $_POST['loginUsuario'];
$loginUsuario = str_replace(array(".", "-"), '', $loginUsuario);
$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode($_POST['senhaUsuario']);

/* $loginUsuario = '041.522.931-60';
  $loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
  $loginUsuario = base64_encode($loginUsuario);
  $senhaUsuario = base64_encode('04152293160'); */

//$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);

$sqlUsuario = "SELECT * FROM alunos INNER JOIN academias ON alunos.idAcademia = academias.idAcademia "
        . "WHERE alunos.loginAluno = ? AND alunos.senhaAluno = ?";
$rsLogin = $PDO->prepare($sqlUsuario);
$rsLogin->bindParam(1, $loginUsuario);
$rsLogin->bindParam(2, $senhaUsuario);
$rsLogin->execute();

if ($rsLogin->rowCount() > 0) {
    while ($dados = $rsLogin->fetch(PDO::FETCH_ASSOC)) {
        $idAluno = $dados['idAluno'];
        $idAcademia = $dados['idAcademia'];
        $nomeAluno = $dados['nomeAluno'];
        $emailAluno = $dados['emailAluno'];
        $loginAluno = base64_decode($dados['loginAluno']);
        $senhaAluno = base64_decode($dados['senhaAluno']);
        $enderecoAluno = $dados['enderecoAluno'];
        $telefoneAluno = $dados['telefoneAluno'];
        $statusAluno = $dados['statusAluno'];
        $statusAcademia = $dados['statusAcademia'];
        $sexoAluno = $dados['sexoAluno'];
    }

    echo $statusAluno;
    echo "";
    echo $statusAcademia;

    if ($statusAcademia == 0) {
        echo "academiaBloqueada";
    } else if ($statusAluno == 0) {
        echo "alunoBloqueado";
    } else {
        echo "loginSucesso" . "/" . $idAluno . "/" . $idAcademia . "/" . $nomeAluno . "/" . $emailAluno . "/" . $loginAluno 
                . "/" . $senhaAluno . "/" . $enderecoAluno . "/" . $telefoneAluno . "/" . $sexoAluno;
    }
} else {
    echo "loginErro";
}
