<?php

session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($mysqli, $_POST['nmCliente']);
$Cpf = mysqli_real_escape_string($mysqli, $_POST['Cpf']);
$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
$Senha = mysqli_real_escape_string($mysqli, ($_POST['Senha']));
$Data = mysqli_real_escape_string($mysqli, ($_POST['data']));
$Genero = mysqli_real_escape_string($mysqli, $_POST['genero']);

if($Genero == "Masculino"){
  $Genero = 'M';
}else if($Genero == "Feminino"){
  $Genero = 'F';
}else{
    $Genero = 'O';
}
function validar_cpf($cpf)
{
	// remove caracteres especiais do CPF
	$cpf = preg_replace('/[^0-9]/', '', $cpf);
	// verifica se o CPF tem 11 dígitos
	if (strlen($cpf) != 11) {
		return false;
	}
	// verifica se o CPF é uma sequência de números iguais (ex: 111.111.111-11)
	if (preg_match('/(\d)\1{10}/', $cpf)) {
		return false;
	}
	// calcula o primeiro dígito verificador
	$soma = 0;
	for ($i = 0; $i < 9; $i++) {
		$soma += (int) $cpf[$i] * (10 - $i);
	}
	$resto = $soma % 11;
	$digito1 = $resto < 2 ? 0 : 11 - $resto;
	// calcula o segundo dígito verificador
	$soma = 0;
	for ($i = 0; $i < 10; $i++) {
		$soma += (int) $cpf[$i] * (11 - $i);
	}
	$resto = $soma % 11;
	$digito2 = $resto < 2 ? 0 : 11 - $resto;
	// verifica se os dígitos verificadores estão corretos
	if ($cpf[9] != $digito1 || $cpf[10] != $digito2) {
		return false;
	}
	// CPF válido
	return true;
}

$sql = "select count(*) as total from Cliente where email = '$Email'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../telas/CadastroCliente.php');
	exit;
}

if (!validar_cpf($Cpf)) {
	$_SESSION['cpf_invalido'] = true;
	header('Location: ../telas/CadastroCliente.php');
	exit;
}

$confirmSenha = mysqli_real_escape_string($mysqli, trim(($_POST['ConfirmarSenha'])));
if ($Senha !== $confirmSenha) {
  $_SESSION['senha_nao_confere'] = true;
  header('Location: ../telas/Cadastro.html');
  exit;
}

$sql = "INSERT INTO Cliente(nmCliente, cpf, email, senha, dtNacimento, genero, id_enderecoFaturamento)
        VALUES( '$nome', '$Cpf', '$Email',md5('$Senha'),'$Data', '$Genero', '1')";

if ($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: ../telas/LoginCliente.php');
	exit;
} else {
	echo $mysqli->error;
}

$mysqli->close();
?>