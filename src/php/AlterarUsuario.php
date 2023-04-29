<?php

session_start();
include("conexao.php");
$idUsuario = $_SESSION['idUsuario'];


$nmProduto= $_POST['nome'];
$permissao= $_POST['cargo'];
$cpf= $_POST['Cpf'];
$email= $_POST['Email'];
$senha= $_POST['Senha'];
//$ftCapa= $_POST['ftCapa'];


$sqlUpdate = "UPDATE Usuario SET nmUsuario='$nmProduto',permissao='$permissao',cpf='$cpf',email='$email',senha=md5('$senha') WHERE id_usuario ='$idUsuario'";

$result = $mysqli->query($sqlUpdate);
header('Location: ../telas/ListarUsuario.php');



?>