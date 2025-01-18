<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Mantém o campo para possível uso futuro

    // Verifica se o usuário existe no banco de dados
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Usuário encontrado, cria sessão
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nome'] = $user['nome'];

        // Redireciona para a página principal
        header('Location: principal.php');
        exit();
    } else {
        echo "E-mail não encontrado no sistema!<br><br>";
        echo "<a href='index.php'>Tentar novamente</a>";
    }
}
?>
