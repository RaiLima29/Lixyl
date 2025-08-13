<?php 

require __DIR__ .'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withDatabaseUri('https://lixyl-24da5-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

$usuarios = $database->getReference('Usuarios')->getSnapshot();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Usuários Cadastrados</h1>
    <ul>
        <?php foreach ($usuarios->getValue() as $usuario): ?>
            <p>
                <strong>Usuário:</strong> 
                <?php echo$usuario['usuario']; ?> <br>

                <strong>Senha:</strong> 
                <?php echo $usuario['senha']; ?> 
                <br><br><br>
            </p>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>