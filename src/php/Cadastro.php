°<?php

session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
$Cpf = mysqli_real_escape_string($mysqli, $_POST['Cpf']);
$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
$Senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['Senha'])));
$Status = true;
$Permissao = "Padrao";

$sql = "select count(*) as total from Usuario where Email = '$Email'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../telas/Cadastro.html');
	exit;
}

$sql = "INSERT INTO Usuario(statusUsuario, permissao, nmUsuario, cpf, email, senha)
        VALUES( '$Status', '$Permissao', '$nome','$Cpf','$Email', '$Senha')";

if ($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: ../telas/Login.html');
	exit;
} else {
	echo $mysqli->error;
}

$mysqli->close();
?>