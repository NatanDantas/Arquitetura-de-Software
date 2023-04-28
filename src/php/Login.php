<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../telas/Login.html');
	exit();
}

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select * from usuario where email = '{$email}' and senha = md5('{$senha}')";


$result = $mysqli->query($query) or die($mysqli->error);

$row = $result->num_rows;

if($row == 1) {
	 $usuario = mysqli_fetch_assoc($result);
	 if($usuario['statusUsuario']){
		$_SESSION['nmUsuario'] = $usuario['nmUsuario'];
		$_SESSION['permissao'] = $usuario['permissao'];
		if($usuario['permissao']=="Admin")
			header('Location: ../telas/HomeAdmin.php');
		if($usuario['permissao'] == "Estoquista")
			header('Location: ../telas/Home.html');
		exit();
	 }else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: ../telas/Login.html?err=qqq');
		exit();
	 }
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../telas/Login.html?err=true');
	exit();
}

?>