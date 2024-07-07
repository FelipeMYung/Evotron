<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="estilos/cadastro.css">
</head>
<body>
    <div class="container">
        <!-- Seção de Login -->
        <div class="form-section">
            <h2>Login</h2>
            <form>
                <label for="login-nome">Nome:</label>
                <input type="text" id="login-nome" name="nome" placeholder='Nome usuário' required>
                <label for="login-senha">Senha:</label>
                <input type="password" id="login-senha" name="senha" placeholder='Senha' required>
                <input type="submit" value="Entrar">
            </form>
        </div>

        <div class="separator"></div>
        <!-- Seção de Cadastro -->
        <div class="form-section">
            <h2>Cadastro</h2>
            <form>
                <label for="cadastro-nome">Nome:</label>
                <input type="text" id="cadastro-nome" name="nome" placeholder='Nome usuário' required>
                <label for="cadastro-email">Email:</label>
                <input type="email" id="cadastro-email" name="email" placeholder='Email' required>
                <label for="cadastro-senha">Senha:</label>
                <input type="password" id="cadastro-senha" name="senha" placeholder='Senha' required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
