<?php

ini_set('default_charset', 'UTF-8');
include 'conexao.php';

$cpfUsuario = $_POST['cpfUsuario'];
//$cpfUsuario = '093.071.000-20';

$procurarUsuario = "SELECT * FROM alunos WHERE cpfAluno = ?";

$rsProcurarUsuario = $PDO->prepare($procurarUsuario);
$rsProcurarUsuario->bindParam(1, $cpfUsuario);
$rsProcurarUsuario->execute();

if ($rsProcurarUsuario->rowCount() > 0) {
	
    while ($dadosUsuario = $rsProcurarUsuario->fetch(PDO::FETCH_ASSOC)) {
        $idAluno = $dadosUsuario['idAluno'];
        $cpfAluno = $dadosUsuario['cpfAluno'];
    }
	
    echo "success" . "," . $idAluno . "," . $cpfAluno;
} else {
    echo "error";
}