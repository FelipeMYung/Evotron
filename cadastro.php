<?php
include('conexao.php');

if(isset($_POST["email"]) || isset($_POST['senha'])){
    if(strlen($_POST['email'])==0){
        echo"Preencha seu email";
    }elseif(strlen($_POST['senha'])==0){
        echo"Preencha sua senha";
    }else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha");

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION['username'] = $usuario['username'];

            header('Location: painel.php');
        }else{
            echo "Falha ao logar, email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Responsivo</title>
    <link rel="stylesheet" href="estilos/cadastro.css">
</head>
<body>
    <div class="container">
        <h1>ENTRAR</h1>
        <div class="form-container">
            <!--
            <div class="cadastro">
                <h2>Cadastro</h2>
                <form>
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="password" placeholder="Senha" required>
                    <input type="password" name="confirm-password" placeholder="Confirmar senha" required>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
            -->
            <div class="login">
                <h2>Login</h2>
                <form method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
        <a href="index.php" class="back-link">Voltar ao Início</a>
    </div>
</body>
</html>
