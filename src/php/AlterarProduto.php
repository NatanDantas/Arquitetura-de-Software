<?php

session_start();
include("conexao.php");
$idProduto = $_SESSION['idProduto'];

//Aqui preciso que cadastre mais de uma imagem para dicionar o carrossel

$nmProduto= $_POST['nmProduto'];
$descricao= $_POST['descricao'];
$preco= $_POST['preco'];
$quantidade= $_POST['quantidade'];
//$ftCapa= $_POST['ftCapa'];


$sqlUpdate = "UPDATE Produto SET nmProduto='$nmProduto',descricao='$descricao',preco='$preco',quantidade='$quantidade' WHERE id_produto ='$idProduto'";

$result = $mysqli->query($sqlUpdate);
header('Location: ../telas/ListarProduto.php');



?>