<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script type = "text/jscript" src="script.js"></script>
    <title>Editar Paciente - PHP</title>
</head>
<body>
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

<div class="cabecalho">
        
        <div>
            <img src="imagens/logoufjf2.png" alt="" class="logoufjf">
        </div>
        <div class="titulo">
           Editar Paciente           
        </div>

        

        <div>
            <?php 
                include("conecta.php");
                $seleciona=mysqli_query($conexao, "select * from pacientes order by id asc");
                $rowcount=mysqli_num_rows($seleciona);
                echo "<b> Nº de Pacientes: ".$rowcount . "</b>"; 
            ?>
        </div>

    </div>

<?php 
    include("conecta.php");
    $recid = $_GET["editaid"];
    $seleciona = mysqli_query($conexao, "select * from pacientes where id=$recid");
    $campo= mysqli_fetch_array($seleciona);

?>
<form method = "post" action="gravaedita.php" class="formulario">
    <input type="hidden" name="id" value ="<?=$campo["id"]?>">
    <input type="text" name="nome" placeholder="Nome" required class ="input" value="<?=$campo["nome"] ?>"><br>
    <input type="text" name="telefone" placeholder="Telefones" required class ="input" value="<?=$campo["telefone"] ?>"><br>
    <input type="text" name="especialidade" placeholder="Especialidade" required class ="input" value="<?=$campo["especialidade"] ?>"><br>
    <textarea name="observacao" cols="40" rows="5" required class ="input" placeholder = "Observações" > <?=$campo["observacao"]?> </textarea><br>
    <input type="submit" value="GRAVAR" class = "botform">
</form>
    
</body>
</html>