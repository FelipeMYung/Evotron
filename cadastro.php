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
    <style>p{
    font-size: 30px;
    font-family: Noto Sans, sans-serif;
    text-align: justify;
}
.navbar-expand-lg{
    background-color: #161616;
}
.nav-link{
    font-size: 35px;
}
.navbar-brand{
    font-size: 50px;
}
#continua-header{
    background-color: #161616;
}
#header-h1{
    color: white;
    font-family: Noto Sans, sans-serif;
    font-size: 150px;
}
#header-h2{
    color: white;
    font-family: Noto Sans, sans-serif;
    font-size: 70px;
}
.span-verde{
    color: #34AD29;
}
.span-roxo{
    color: #481589;
}
#transicao-main{
    background-image: linear-gradient(#929292, #c0c0c0, rgb(255, 255, 255));
}
 
/* CADASTRO CSS */
 
.cadastro-corpo{
    background-image:linear-gradient(#050505, #0c0c0c, #050505);
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    flex-flow: column;
}
.form-group {
    position: relative;
    margin: 12px, 0;
}
.form-group input {
    padding: 8px 10px;
    font-size: 18px;
    border-radius: 5px;
    border: #acacac solid 2px;
    background-color: transparent;
    color: #eee;
    transition: 0.15s all ease;
}
.form-group input:focus {
    border-color: #eee;
}
.form-group input::placeholder {
    color: transparent;
}
.form-group .form-label {
    position: absolute;
    top: 9px;
    left: 0;
    font-size: 18px;
    padding: 0 10px;
    color: #acacac;
    pointer-events: none;
    transition: 0,15s all ease;
}
.form-group input:focus + .form-label,
.form-group input:not(:placeholder-shown) +
.form-label {
    transform: translate(5px, -22px);
    background-color: #0c0c0c;
    font-size: 14px;
    color: #acacac;
}
h4 {
    font-size: 16px;
    font-family: Noto Sans, sans-serif;
}
#h3-cadastro {
    font-size: 25px;
    font-family: Noto Sans, sans-serif;
    color: #481589;
}
#link-cadastro-inicio {
    text-decoration: none;
    color: #acacac;
}
#link-cadastro-inicio:active {
    text-decoration: none;
}
#link-cadastro-inicio:hover {
    text-decoration: none;
}
</style>
</head>
<body class="cadastro-corpo">
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
        <a href="Menu.php"><button class="btn btn-success btn-lg" style="width: 24.2vh" type="button">Cadastre-se</button></a>
        <h4 class="mt-3">Já possui uma conta?<a href="login.html"> Faça login</a></h4>
        <a id="link-cadastro-inicio" href="Menu.php">Voltar para o início</a>
    </section>
    </main>
</body>
</html>