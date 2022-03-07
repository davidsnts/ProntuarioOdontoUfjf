<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="style/lista.css">
    <script type = "text/jscript" src="script.js"></script>
    <title>Cadastro</title>
</head>
<body>
<?php
            session_start();

            if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
                require("acoes/conexao.php");

                $conexaoClass = new Conexao();
                $conexao = $conexaoClass->conectar();

                $nvl  = $_SESSION["usuario"][1];
                $nome = $_SESSION["usuario"][0];
            }else{
                echo "<script>window.location = 'index.php'</script>";
            }
        ?>

<div class="cabecalho">
        
        <div>
            <img src="imagens/logoufjf2.png" alt="" class="logoufjf">
        </div>
        <div class="titulo">
           Cadastrar           
        </div>

        <div>
            <?php 
                include("acoes/conecta.php");
                $seleciona=mysqli_query($conexao, "select * from pacientes order by id asc");
                $rowcount=mysqli_num_rows($seleciona);
                echo "<b> Nº de Pacientes: ".$rowcount . "</b>"; 
            ?>
        </div>

    </div>
    
<style>
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}



form {
 
  width: 500px;
  margin: 0 auto;
  
  }

  textarea {
      width: 100%;
      height:300px;
  resize: none;
}




</style>


    
    
    
    <form method = "get" action="grava.php" class="formularioform">
    <input type="text" name="nome" placeholder="Nome do paciente" required class ="input"><br>
    <input type="text" name="telefone" placeholder="Telefones" required class ="input"><br>
    <input type="text" name="especialidade" placeholder="Especialidade" required class ="input"><br>
    <textarea name="observacao" cols="40" rows="5" required class ="input" placeholder = "Observações"></textarea><br>
    <input type="submit" value="CADASTRAR" class = "botform">

    

    </div>

    
</body>
</html>