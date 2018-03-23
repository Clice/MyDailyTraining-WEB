<?php 

require 'conexao.php';

$loginUsuario = $_POST['loginUsuario'];
$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode($_POST['senhaUsuario']);

/*$loginUsuario = '041.522.931-60';
$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);
$loginUsuario = base64_encode($loginUsuario);
$senhaUsuario = base64_encode('04152293160');
$loginUsuario = str_replace(array(".","-"), '', $loginUsuario);*/

$sqlUsuario = "SELECT * FROM alunos INNER JOIN academias ON alunos.idAcademia = academias.idAcademia WHERE alunos.loginAluno = ? AND alunos.senhaAluno = ?";
$login = $PDO->prepare($sqlUsuario);

$login->bindParam(1, $loginUsuario);
$login->bindParam(2, $senhaUsuario);
$login->execute();

$resposta = array();

if($login->rowCount() > 0){
		
	while ($dadosLogin = $login->fetch(PDO::FETCH_ASSOC)) {
		$resposta["idUsuario"] = $dadosLogin['idAluno'];
		$resposta["idAcademia"] = $dadosLogin['idAcademia'];
		$resposta["nomeUsuario"] = $dadosLogin['nomeAluno'];
		$resposta["emailUsuario"] = $dadosLogin['emailAluno'];
		$resposta["loginUsuario"] = $dadosLogin['loginAluno'];
		$resposta["senhaUsuario"] = $dadosLogin['senhaAluno'];
		$resposta["statusAcademia"] = $dadosLogin['statusAcademia'];
		$resposta["statusAluno"] = $dadosLogin['statusAluno'];
	}
	
	$resposta["loginSucesso"] = true;
	
	echo json_encode($resposta);
} else {
	$resposta["loginSucesso"] = false;
	echo json_encode($resposta);
}
?>