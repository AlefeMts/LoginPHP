<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $dbname = 'projeto';

    $mysqli = new mysqli($host, $usuario, $senha, $dbname);


if($mysqli->error){
    die("Falha ao conectar ao Banco de dados: " .$mysqli->error);
}else{
    //echo 'Conectado ao Banco de dados';
}

?>

