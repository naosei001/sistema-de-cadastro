<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo $_SESSION['user_nome']; ?>!</h1>
        
        <h2>Opções:</h2>
        <a href="cadastro.php"><button>Cadastrar Novo Usuário</button></a>
        <a href="listar.php"><button>Listar Usuários</button></a>

        <br>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
