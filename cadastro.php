<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'login') {
        // Lógica de login
        if (empty($_POST['email'])) {
            echo "Preencha seu email";
        } elseif (empty($_POST['senha'])) {
            echo "Preencha sua senha";
        } else {
            $email = $conn->real_escape_string($_POST['email']);
            $senha = $conn->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conn->query($sql_code) or die("Falha");

            if ($sql_query->num_rows === 1) {
                $usuario = $sql_query->fetch_assoc();
                if (!isset($_SESSION)) session_start();
                $_SESSION['username'] = $usuario['username'];
                header('Location: painel.php');
            } else {
                echo "Email ou senha incorretos";
            }
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'register') {
        // Lógica de cadastro
        if (empty($_POST['username'])) {
            echo "Preencha seu nome";
        } elseif (empty($_POST['email'])) {
            echo "Preencha seu email";
        } elseif (empty($_POST['password'])) {
            echo "Preencha sua senha";
        } elseif ($_POST['password'] !== $_POST['confirm-password']) {
            echo "As senhas não coincidem";
        } else {
            $name = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);

            $sql_code = "INSERT INTO users (username, email, senha) VALUES ('$name', '$email', '$password')";
            if ($conn->query($sql_code)) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="estilos/cadastro.css">
    <script>
        // Alterna entre Login e Cadastro
        function toggleForm() {
            const formContainer = document.getElementById('form-container');
            const isLogin = formContainer.dataset.mode === 'login';

            if (isLogin) {
                formContainer.innerHTML = `
                    <h2>Cadastro</h2>
                    <form method="POST">
                        <input type="hidden" name="action" value="register">
                        <input type="text" name="username" placeholder="Nome" required>
                        <input type="email" name="email" placeholder="E-mail" required>
                        <input type="password" name="password" placeholder="Senha" required>
                        <input type="password" name="confirm-password" placeholder="Confirmar senha" required>
                        <button type="submit">Cadastrar</button>
                    </form>
                    <button onclick="toggleForm()">Já tem uma conta? Login</button>
                `;
                formContainer.dataset.mode = 'register';
            } else {
                formContainer.innerHTML = `
                    <h2>Login</h2>
                    <form method="POST">
                        <input type="hidden" name="action" value="login">
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="senha" placeholder="Senha" required>
                        <button type="submit">Entrar</button>
                    </form>
                    <button onclick="toggleForm()">Não tem uma conta? Cadastro</button>
                `;
                formContainer.dataset.mode = 'login';
            }
        }
    </script>
</head>
<body>
    <div id="form-container" data-mode="login">
        <h2>Login</h2>
        <form method="POST">
            <input type="hidden" name="action" value="login">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <button onclick="toggleForm()">Não tem uma conta? Cadastro</button>
    </div>
    <a href="index.php">Voltar ao Início</a>
</body>
</html>
