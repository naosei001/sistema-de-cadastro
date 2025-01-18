<?php
session_start();

// Se o usuário já estiver logado, redireciona para a página principal
if (isset($_SESSION['user_id'])) {
    header('Location: principal.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Login</h1>
    
    <form action="login_action.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
    
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>