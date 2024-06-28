<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body class="cadastro-corpo">
    <main>
    <section class="cadastro">
        <h3 id="h3-cadastro">Insira seu:</h3>
        <div class="form-group">
            <input type="text" placeholder="Full Name">
            <label class="form-label">Nome completo</label>
        </div>
        <div class="form-group">
            <input type="email" placeholder="E-mail">
            <label class="form-label">Senha</label>
        </div>

        <div class="form-group">
            <input type="email" placeholder="E-mail">
            <label class="form-label">E-mail</label>
        </div>

        <a href="Menu.php">
            <button class="btn btn-success btn-lg" style="width: 40.2vh" type="button">Cadastre-se</button></a>
        <a id="link-cadastro-inicio" href="index.php">Voltar para o início</a>
    </section>

    <section class="login">
        <h3 id="h3-cadastro">Insira seu:</h3>
        <div class="form-group">
            <input type="text" placeholder="Full Name">
            <label class="form-label">Nome completo</label>
        </div>
        <div class="form-group">
            <input type="email" placeholder="E-mail">
            <label class="form-label">Senha</label>
        </div>

        
        <a href="Menu.php">
            <button class="btn btn-success btn-lg" style="width: 40.2vh" type="button">Login</button></a>
            
        <a id="link-cadastro-inicio" href="index.php">Voltar para o início</a>
    </section>
    </main>
</body>
</html>