<?php
include 'config.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$username = $_POST['username'];

// Verifica se o usuário já existe
$result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' OR usuario = '$usuario'");
if (mysqli_num_rows($result) > 0) {
    header("Location: Cadastro.php?erro=E-mail ou usuário já cadastrado.");
    exit;
} elseif (mysqli_num_rows(mysqli_query($conexao, "SELECT * FROM usuarios WHERE username = '$username'")) > 0) {
    header("Location: Cadastro.php?erro=Nome de Usuário já cadastrado.");

} else {
    mysqli_query($conexao, "INSERT INTO usuarios (usuario, email, senha, username) VALUES ('$usuario', '$email', '$senha', '$username')");

    header("Location: CadAdicional.php?cadastro=Ok");
    
}
?>