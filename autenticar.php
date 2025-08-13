<?php 
session_start();
include_once 'config.php';
    // print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
        
    include_once 'config.php';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    print_r($usuario);
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conexao->query($sql);

    // print_r($result);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: Login.php?erro=Login inválido');
            exit;
        } else {

            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            
            header('Location: mainpage.php');

    }
    } else {
        header('Location: Login.php');
    }
?>