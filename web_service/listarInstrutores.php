<?php

require 'conexao.php';

//$idUsuario = $_POST['idUsuario'];
$idAcademia = $_POST['idAcademia'];

//$idUsuario = $_POST['idUsuario'];
//$idAcademia = 66;

$listarInstrutores = "SELECT usuarios.idUsuario,usuarios.nomeUsuario,tokens.tokenUsuario FROM usuarios INNER JOIN academias ON usuarios.idAcademia = academias.idAcademia INNER JOIN tokens ON usuarios.idUsuario = tokens.idUsuario WHERE academias.idAcademia = ? AND usuarios.tipoConta = 4";
$rsListarInstrutores = $PDO->prepare($listarInstrutores);
$rsListarInstrutores->bindParam(1, $idAcademia);
$rsListarInstrutores->execute();

if ($rsListarInstrutores) {
    if ($rsListarInstrutores->rowCount() > 0) {

        while ($dadosInstrutor = $rsListarInstrutores->fetch(PDO::FETCH_ASSOC)) {
            $vetor[] = $dadosInstrutor['idUsuario'];
            $vetor[] = $dadosInstrutor['nomeUsuario'];
            $vetor[] = $dadosInstrutor['tokenUsuario'];
        }

        $formatado = implode(',', $vetor);
        echo "instrutoresSuccess," . $formatado;
    } else if ($rsListarInstrutores->rowCount() == 0) {
        echo "nenhumInstrutor";
    }
} else {
    echo "error";
}
