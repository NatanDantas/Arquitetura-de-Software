<?php

session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
$Cpf = mysqli_real_escape_string($mysqli, $_POST['Cpf']);
$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
$Senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['Senha'])));
$Grupos = mysqli_real_escape_string($mysqli, ($_POST['Grupos']));
$Login = mysqli_real_escape_string($mysqli, $_POST['Login']);

$sql = "select count(*) as total from Usuario where login = '$Login'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: Cadastro.html');
	exit;
}

$sql = "INSERT INTO Usuario(nmUsuario, cpf, email, login, senha,grupos)
        VALUES('$nome','$Cpf','$Email','$Login', '$Senha', '$Grupos')";

if ($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: Login.html');
	exit;
} else {
	echo $mysqli->error;
}

$mysqli->close();
?>