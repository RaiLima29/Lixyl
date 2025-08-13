<?php
  session_start();
  if (!isset($_SESSION['usuario']) == true || !isset($_SESSION['senha']) == true) {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);
      header('Location: Login.php');
  }
  $logado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lixyl - Página Inicial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./Src/Img/LixylClaro.png" type="image/x-icon">

  <link rel="stylesheet" href="./Src/css/stylemainpage.css">

</head>
<body>

  <div class="sidebar">
    <h2>Lixyl</h2>
    <a href="#">🏠 Início</a>
    <a href="#">📨 Mensagens</a>
    <a href="#">➕ Novo Post</a>
    <a href="#">👤 Meu Perfil</a>
    <a href="#">⚙️ Configurações</a>
    <a href="./sair.php">🚪 Sair</a>
  </div>

  <div class="main">
    <div class="welcome">👋 Bem-vindo(a) <?php echo $logado ?>!</div>

    <div class="post">
        <h4>@railima29</h4>
        <p>Acabei de criar meu perfil na Lixyl. Bora socializar! 😎</p>
      </div>

      <div class="post">
        <h4>@lucas_dev</h4>
        <p>Frontend da Lixyl tá ficando 🔥 Parabéns à equipe!</p>
      </div>

      <div class="post">
        <h4>@julia_art</h4>
        <p>Postando minha nova arte por aqui ✨🎨</p>
      </div>
    </div>
  </div>
</body>
</html>