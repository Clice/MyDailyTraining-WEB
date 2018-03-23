<?php 

require 'conexao.php';

$idUsuario = $_POST['idUsuario'];
//$idAcademia = $_POST['idAcademia'];

$idAcademia = 58;

/*$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode($_POST['senhaUsuario']);
$loginUsuario = '041.522.931-60';
$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode('04152293160');
$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);*/

$sqlListarInstrutores = "SELECT * FROM usuarios INNER JOIN academias ON usuarios.idAcademia = academias.idAcademia WHERE academias.idAcademia = ? AND usuarios.tipoConta = 4";
$rsListarInstrutores = $PDO->prepare($sqlListarInstrutores);
$rsListarInstrutores->bindParam(1, $idAcademia);
$rsListarInstrutores->execute();

$resposta = array();

if($rsListarInstrutores->rowCount() > 0){
		
	while ($dadosInstrutores = $rsListarInstrutores->fetch(PDO::FETCH_ASSOC)) {
		$resposta["nomeUsuario"] = $dadosInstrutores['nomeUsuario'];
	}
	
	$resposta["success"] = true;
	
	echo json_encode($resposta);
} else {
	$resposta["success"] = false;
	echo json_encode($resposta);
}
?>