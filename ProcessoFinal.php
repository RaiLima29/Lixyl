<?php
session_start();
include_once 'config.php';

mysqli_query($conexao, "update usuarios set foto_perfil = '{$_POST['foto_perfil']}', genero = '{$_POST['genero']}', data_nascimento = '{$_POST['datanasc']}' where usuario = '{$_SESSION['usuario']}'");
header("Location: autenticar.php");

?>