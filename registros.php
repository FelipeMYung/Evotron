<?php
include("protect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/style.css">
</head>
<body>
<header>
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <h1>Bem vindo a página inicial <?php echo $_SESSION['username']; ?></h1>
            </div>
            <nav>
                <ul>
                <li ><a style="color:darkgrey;" href="index.php">HOME</a></li>
                    <li><a href="cadastro.php">LOGIN</a></li>
                    <li><a href="Sobre.php">SOBRE</a></li>
                    <li><a href="#">CONTATO</a></li>
                </ul>
            </nav>
        </header>

        <h2>Como você está?</h2>
            <div class="opcoes-humor">
                <div><button class="btn-humor humor-otimo"><img src="./estilos/img/smiley.png" alt=""></button><p>Ótimo</p></div>
                <div><button class="btn-humor humor-bem"><img src="./estilos/img/happiness.png" alt=""></button><p>Bem</p></div>
                <div><button class="btn-humor humor-meio-meio"><img src="./estilos/img/neutral-face.png" alt=""></button><p>+ -</p></div>
                <div><button class="btn-humor humor-mal"><img src="./estilos/img/sad-face.png" alt=""></button><p>Mal</p></div>
                <div><button class="btn-humor humor-horrivel"></button><p>Horrível</p></div>
            </div>
        <h1>Registros:</h1>
        
</body>
</html>