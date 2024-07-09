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
            <div class="login">
                <h2>Login</h2>
                <form>
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="password" name="password" placeholder="Senha" required>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
        <a href="index.php" class="back-link">Voltar ao Início</a>
    </div>
</body>
</html>
