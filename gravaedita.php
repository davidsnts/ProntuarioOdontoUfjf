<?php 

    include("conecta.php");
    
    $recid = $_POST["id"];
    $recNome= $_POST["nome"];
    $recTelefone= $_POST["telefone"];
    $recEspecialidade= $_POST["especialidade"];
    $recObs= $_POST["observacao"];

    mysqli_query($conexao, "update pacientes set nome = '$recNome', telefone = '$recTelefone', especialidade = '$recEspecialidade', observacao = '$recObs' where id=$recid");
    header("location:lista.php");

?>