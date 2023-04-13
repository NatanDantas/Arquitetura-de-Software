<?php

session_start();
include("conexao.php");
$nomeProduto = mysqli_real_escape_string($mysqli, $_POST['nmProduto']);
$descricao = mysqli_real_escape_string($mysqli, $_POST['descricao']);
$preco = mysqli_real_escape_string($mysqli, $_POST['preco']);
$quantidade = mysqli_real_escape_string($mysqli, $_POST['quantidade']);
$File = mysqli_real_escape_string($mysqli, ($_POST['ftCapa']));

echo(gettype($File));

$upload = salvarFtperfil($_FILES);
if(gettype($upload) == "string"){
	$File = $upload;
}else{
	$File = false;
	echo($upload);
}

$sql = "INSERT INTO Produto(nmProduto, descricao, preco, quantidade, ftCapa)
        VALUES( '$nomeProduto', '$descricao', '$preco','$quantidade','$File')";

if ($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: ../telas/HomeAdmin.php');
	exit;
} else {
	echo $mysqli->error;
}

$mysqli->close();

function salvarFtperfil($file){
	$fotoDir = "../imagens/ftCapa/";
	$fotoPath = $fotoDir.basename($file["ftCapa"]["name"]);
	$fotoTmp = $file["ftCapa"]["tmp_name"];
	if(move_uploaded_file($fotoTmp, $fotoPath)){
		return $fotoPath;
	}else{
		return false;
	}
}
?>