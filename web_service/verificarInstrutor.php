<?php

ini_set('default_charset', 'UTF-8');
include 'conexao.php';

$cpfUsuario = $_POST['cpfUsuario'];
//$cpfUsuario = '093.071.000-20';

$procurarUsuario = "SELECT * FROM usuarios WHERE cpfUsuario = ? AND tipoConta = 4";

$rsProcurarUsuario = $PDO->prepare($procurarUsuario);
$rsProcurarUsuario->bindParam(1, $cpfUsuario);
$rsProcurarUsuario->execute();

if ($rsProcurarUsuario->rowCount() > 0) {

    while ($dadosUsuario = $rsProcurarUsuario->fetch(PDO::FETCH_ASSOC)) {
        $idUsuario = $dadosUsuario['idUsuario'];
        $cpfUsuario = $dadosUsuario['cpfUsuario'];
    }

    echo "success" . "," . $idUsuario . "," . $cpfUsuario;
} else {
    echo "error";
}