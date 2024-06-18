<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body class="cadastro-corpo">
    <header>
      <div class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <span>Olá, Usuário</span> <!-- A mensagem "Olá, Usuário" deve ser dinâmica -->
      </div>
      <nav>
          <ul>
            <li><a href="index.php">MENU</a></li>
            <li style="color:darkgrey;"><a href="#">LOGIN</a></li>
            <li><a href="Sobre.php">SOBRE</a></li>
            <li><a href="#">CONTATO</a></li>
          </ul>
      </nav>
  </header>
    <main>
    <section>
        <h3 id="h3-cadastro">Insira seu:</h3>
        <div class="form-group">
            <input type="text" placeholder="Full Name">
            <label class="form-label">Nome completo</label>
        </div>
        <div class="form-group">
            <input type="email" placeholder="E-mail">
            <label class="form-label">E-mail</label>
        </div>
        <button class="btn btn-success btn-lg" style="width: 24.2vh" type="button">Cadastre-se</button>
        <h4 class="mt-3">Já possui uma conta?<a href="login.php"> faça login</a></h4>
        <a id="link-cadastro-inicio" href="index.php">Voltar para o início</a>
    </section>
    </main>
</body>
</html>