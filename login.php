<?php

?>

<?php
include 'conexao.php';

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preenhca sua senha";
    }else{

        $email = $mysqli->real_escape_string(($_POST['email']));
        $senha = $mysqli->real_escape_string(($_POST['senha']));

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " .$mysqli->error);

        //Verificando se alguma linha do banco foi afetada
        $quantidade = $sql_query->num_rows;

     
        if($quantidade == 1){ 

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<title>Login Formulário</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
     <h2>Login</h2>
        <form method="POST" action="">
            <div class="input-field">           
            <input type="text" name="email" id="email" placeholder="Entre com seu Login"><br><br>
            <div class="underline"></div>
            </div>
            
            <div class="input-field">
            <input type="password" name="senha" id="senha" placeholder="Insira sua Senha"><br><br>  
            <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
            
        </form>

        <footer>

            <p>Desenvolvido por <b> Alefe Matos</b></p>

        </footer>.
        
    </main>


</body>
</html>