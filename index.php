<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evotron - Evolução Pessoal</title>
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background: linear-gradient(to bottom, #f0f0f0 50%, #ffffff 50%);
      color: #333;
    }

    /* Navbar */
    header {
      background-color: #333;
      color: white;
      padding: 10px 20px;
    }

    .nav-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-bar a, a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
      font-size: 18px;
      transition: color 0.3s;
    }

    .nav-bar a:hover {
      color: #00ff88;
    }

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 50px 20px;
    }

    .hero h1 {
      font-size: 3em;
      color: #6a0dad;
    }

    .hero p {
      font-size: 1.2em;
      margin-top: 20px;
      color: #444;
    }

    .hero button {
      background-color: #00ff88;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 1em;
      margin-top: 20px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .hero button:hover {
      background-color: #6a0dad;
    }

    /* Informações */
    .info {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 20px;
      text-align: center;
    }

    .info div {
      flex: 1;
      margin: 20px;
      min-width: 280px;
    }

    .info h3 {
      font-size: 1.5em;
      color: #6a0dad;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="nav-bar">
      <div><h2>Evotron</h2></div>
      <nav>
        <a href="index.php">Início</a>
        <a href="sobre.php">Sobre</a>
        <a href="cadastro.php">Cadastro</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Bem-vindo ao Evotron</h1>
    <p>Transforme sua vida com monitoramento e evolução pessoal. Acompanhe seus objetivos e alcance o seu melhor.</p>
    <button><a href="cadastro.php">Comece Agora</a></button>
  </div>

  <!-- Informações -->
  <div class="info">
    <div>
      <h3>Planejamento Personalizado</h3>
      <p>Crie metas e acompanhe sua evolução com um plano feito sob medida para você.</p>
    </div>
    <div>
      <h3>Monitoramento Diário</h3>
      <p>Registre seu progresso e veja como você está avançando ao longo do tempo.</p>
    </div>
    <div>
      <h3>Resultados Visíveis</h3>
      <p>Veja estatísticas claras e precisas sobre o seu desenvolvimento pessoal.</p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>Desenvolvido por Felipe - Janeiro de 2025</p>
  </footer>
</body>
</html>
