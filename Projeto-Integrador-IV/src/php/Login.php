<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../telas/Login.html');
	exit();
}

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select id_usuario,nmUsuario,permissao from usuario where email = '{$email}' and senha = '{$senha}'";


$result = $mysqli->query($query) or die($mysqli->error);

$row = $result->num_rows;

if($row == 1) {
	 $usuario = mysqli_fetch_assoc($result);
	 $_SESSION['id_usuario'] = $usuario['id_usuario'];
	 if($usuario['permissao']=="Admin")
		 header('Location: ../telas/HomeAdmin.html');
	if($usuario['permissao'] == "Padrao")
	 	header('Location: ../telas/Home.html');
	 exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: Login.html?err=true');
	exit();
}

?>