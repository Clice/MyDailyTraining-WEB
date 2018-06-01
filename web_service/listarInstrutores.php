<?php

require 'conexao.php';

$idAcademia = $_POST['idAcademia'];

$listarInstrutores = "SELECT usuarios.idUsuario, usuarios.nomeUsuario, usuarios.sexoUsuario, tokens.tokenUsuario FROM usuarios
INNER JOIN academias ON usuarios.idAcademia = academias.idAcademia INNER JOIN tokens ON usuarios.idUsuario = tokens.idUsuario
WHERE academias.idAcademia = ? AND usuarios.tipoConta = 4 AND tokens.statusInstrutor = 1 AND usuarios.statusUsuario = 1";
$rsListarInstrutores = $PDO->prepare($listarInstrutores);
$rsListarInstrutores->bindParam(1, $idAcademia);
$rsListarInstrutores->execute();

if ($rsListarInstrutores) {
    if ($rsListarInstrutores->rowCount() > 0) {
        while ($dadosInstrutor = $rsListarInstrutores->fetch(PDO::FETCH_ASSOC)) {
            $vetor[] = $dadosInstrutor['idUsuario'];
            $vetor[] = $dadosInstrutor['nomeUsuario'];
            $vetor[] = $dadosInstrutor['sexoUsuario'];
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