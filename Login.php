<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lixyl Login</title>

    <link rel="shortcut icon" href="./Src/Img/LixylClaro.png" type="image/x-icon">

    <link rel="stylesheet" href="./Src/css/stylelogin.css">
</head>
<body>

        <nav>
            <div class="navesq">

                <!-- Logo -->
                <a href="index.html">
                    <img src="./Src/Img/LixylEscuro.png" alt="Logo" class="logo">
                </a>

                <!-- Botão de saiba mais -->
                <a href="" class="txtNav">Saiba mais</a>

                <!-- Botão de contato -->
                <a href="" class="txtNav">Contato</a>
            </div>

            <div class="navdir">
                <!-- Botão de login -->
                <a href="./Login.php" class="butnav">Login</a>

                <!-- Botão de cadastro -->
                <a href="./Cadastro.php" class="butnav">Cadastre-se</a>
            </div>
        </nav>
        <div class="container">
            <form class="loginCard" method="post" action="autenticar.php">
            <h2>Login</h2>
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit" name="submit" value="Entrar">Entrar</button>

            <?php if (isset($_GET['erro']) && !empty($_GET['erro'])): ?>
            <div style="background: #ffe0e0; color: #a94442; border: 1px solid #f5c6cb; border-radius: 6px; padding: 15px; margin: 20px 0; text-align: center; box-shadow: 0 2px 6px #f8d7da;">
            <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php endif; ?>
            
            <p style="text-align: center; margin-top: 16px;">
                Não tem uma conta? <a href="Cadastro.php">Cadastre-se</a>
            </form>
        </div>
</body>
</html>