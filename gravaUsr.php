<?php 

    include("acoes/conecta.php");

    $recId= $_GET["id"];
    $recNome= $_GET["nome"];
    $recEmail= $_GET["email"];
    $recNivel= $_GET["nivel"];
    $recSenha= $_GET["senha"];

    mysqli_query($conexao, "insert into usuarios (nome, email, nivel,senha) values ( '$recNome', '$recEmail','$recNivel', '$recSenha')");

    header("location:dashboard.php");


?>