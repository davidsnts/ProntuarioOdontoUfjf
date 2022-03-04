<?php 

    include("conecta.php");

    $recId= $_GET["id"];
    $recNome= $_GET["nome"];
    $recTelefone= $_GET["telefone"];
    $recEspecialidade= $_GET["especialidade"];
    $recObs= $_GET["observacao"];

    mysqli_query($conexao, "insert into pacientes (nome, telefone, especialidade,observacao) values ( '$recNome', '$recTelefone','$recEspecialidade', '$recObs')");

    header("location:lista.php");


?>