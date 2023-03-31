<?php
session_start();
include("conexao.php");

if(isset($_POST['filtrar'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $sql = "SELECT * FROM Usuario WHERE nmUsuario LIKE '%$nome%' ORDER BY nmUsuario ASC";
} else {
    $sql = "SELECT * FROM Usuario ORDER BY nmUsuario ASC";
}

$resultado = $mysqli->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        $id = $linha['idUsuario'];
        $nome = $linha['nmUsuario'];
        $email = $linha['email'];
        $status = $linha['statusUsuario'];
        $grupo = $linha['permissao'];

        echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo "<td>$status</td>";
        echo "<td>$grupo</td>";
        echo "<td><a href='alterarUsuario.php?id=$id'>Alterar</a></td>";
        if ($status) {
            echo "<td><a href='inativarUsuario.php?id=$id'>Inativar</a></td>";
        } else {
            echo "<td><a href='reativarUsuario.php?id=$id'>Reativar</a></td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum usuário encontrado.</td></tr>";
}

$mysqli->close();
?>
