<?php
     if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        die(" Desculpe :( você não pode acessar esta página, porque não está logado.<p><a href=\"login.php\">Entrar</a></p>");
    }
?>
