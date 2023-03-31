<?php
session_start();
include("conexao.php");

// recupera o id do usuário a ser alterado e a ação (ativar ou inativar)
$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$acao = mysqli_real_escape_string($mysqli, $_POST['acao']);

// verifica se a ação é válida
if ($acao != 'Ativar' && $acao != 'Inativar') {
	echo "Ação inválida.";
	exit;
}

// busca o usuário no banco de dados
$sql = "SELECT * FROM Usuario WHERE idUsuario = '$id'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

// verifica se o usuário foi encontrado
if (!$row) {
	echo "Usuário não encontrado.";
	exit;
}

// atualiza o status do usuário
$status = ($acao == 'Ativar') ? 1 : 0;
$sql = "UPDATE Usuario SET statusUsuario = '$status' WHERE idUsuario = '$id'";

if ($mysqli->query($sql) === TRUE) {
	// exibe mensagem de confirmação e redireciona para a página de listagem de usuários
	$_SESSION['msg_confirmacao'] = "Usuário ".$row['nmUsuario']." ".strtolower($acao)." com sucesso.";
	header('Location: listar_usuarios.php');
	exit;
} else {
	echo $mysqli->error;
}

$mysqli->close();
?>