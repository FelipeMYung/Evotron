<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['username'])){
    die("Você não pode acessar essa página sem logar.");
}

?>