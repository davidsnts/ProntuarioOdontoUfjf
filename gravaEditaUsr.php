<?php 

    include("acoes/conecta.php");
    
    $recid = $_POST["id"];
    $recNome= $_POST["nome"];
    $recEmail= $_POST["email"];
    $recNivel= $_POST["nivel"];
    $recSenha= $_POST["senha"];

    mysqli_query($conexao, "update usuarios set nome = '$recNome', email = '$recEmail', nivel = '$recNivel', senha = '$recSenha' where id=$recid");
    header("location:dashboard.php");

?>