<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografando a senha

    $sql = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha]);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Realizado</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="success-message">
            <p>Cadastro realizado com sucesso!</p>
            <a href="index.php">Voltar para a página inicial</a>
        </div>
    </body>
    </html>
    <?php
}
?>
