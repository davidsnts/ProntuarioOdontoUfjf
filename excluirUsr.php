<?php
    include("acoes/conecta.php");

    $recid=$_GET["idexc"];

    mysqli_query($conexao, "delete from usuarios where id=$recid");

    header("location:dashboard.php");
?>