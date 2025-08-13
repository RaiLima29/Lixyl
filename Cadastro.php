<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>

    <link rel="shortcut icon" href="./Src/Img/LixylClaro.png" type="image/x-icon">

    <link rel="stylesheet" href="./Src/css/styleCad.css">

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
        <h2>Cadastro de Usuário</h2>
        <form action="ProcessoCadastro.php" method="post">
            <label for="usuario">Nome:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required minlength="8" title="A senha deve ter pelo menos 8 caracteres e conter números" pattern="(?=.*\d)">

            <input type="submit" value="Cadastrar">
        </form>
        <?php if (isset($_GET['erro']) && !empty($_GET['erro'])): ?>
            <div style="background: #ffe0e0; color: #a94442; border: 1px solid #f5c6cb; border-radius: 6px; padding: 15px; margin: 20px 0; text-align: center; box-shadow: 0 2px 6px #f8d7da;">
            <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php endif; ?>
        <p style="text-align:center; margin-top:16px;">
            Já tem uma conta? <a href="Login.php">Entrar</a>
        </p>
    </div>
</body>
</html>