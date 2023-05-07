<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../telas/LoginCliente.php');
	exit();
}

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select * from Cliente where email = '{$email}' and senha = md5('{$senha}')";


$result = $mysqli->query($query) or die($mysqli->error);

$row = $result->num_rows;

if($row == 1) {
	    $cliente = mysqli_fetch_assoc($result);
        $_SESSION['nmCliente'] = $cliente['nmCliente'];
        $_SESSION['idCliente'] = $cliente['id_cliente'];
        $_SESSION['Logado'] = true;
        header('Location: ../telas/Home.php');
        exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../telas/LoginCliente.php?err=true');
	exit();
}

?>