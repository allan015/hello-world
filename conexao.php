<?php

function conectar(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "gerenciamento_escolar";
    
    $con = new mysqli($servidor, $usuario, $senha, $bd);
    return $con;
}

$conexao = conectar();
?>

