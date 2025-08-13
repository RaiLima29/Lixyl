<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>

    <link rel="shortcut icon" href="./Src/Img/LixylClaro.png" type="image/x-icon">

    <link rel="stylesheet" href="./Src/css/styleCadAdd.css">

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
        <h2>Inforções Complementares</h2>
        <form action="ProcessoFinal.php" method="post">

            <label for="foto_perfil">Foto de Perfil:</label>
            <br><br>
            <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*" style="display: none;">
            <label for="foto_perfil" class="labelperfil" id="preview-label">
                <span>Escolher foto</span>
            </label>

            <br><br>

            <label for="genero">Gênero:</label>
            <select id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>

            <br><br>

            <input type="date" name="datanasc" id="datanasc" class="datanasc" required>

            <br><br>

            <input type="submit" value="Cadastrar">
        </form>
        
        </p>
    </div>
</body>
<script>
    const input = document.getElementById('foto_perfil');
    const label = document.getElementById('preview-label');
    const span = label.querySelector('span');

    input.addEventListener('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                label.style.backgroundImage = `url(${e.target.result})`;
                span.style.display = "none"; // Oculta o texto
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>

</html>