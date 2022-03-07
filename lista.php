<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/lista.css">
    <script type = "text/jscript" src="script/excluir.js"></script>
    <title>ODONTOLOGIA - UFJF</title>
</head>
<body>
    <div >
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
    </div>

    <div class="cabecalho">
        
        <div>
            <img src="imagens/logoufjf2.png" alt="" class="logoufjf">
        </div>
        <div class="titulo">
           Pacientes           
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

    <div class="usuarioStatus">
        <div>
            <div>
                <span><?php echo "Olá ". $nome. ", Nivel de acesso: ".$nvl ?></span>
                <a href="acoes/logout.php"><button>Sair</button></a>
               
            </div> 
            <div>
                
            </div>
        </div>
    </div>  
    
    <table class="tabela" >
        <tr class = "cabecalhoTabela">

            <td><strong>Id</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Telefone</strong></td>
            <td><strong>Especialidade</strong></td>
            <td><strong>Observações</strong></td>
            <td><strong>Alterar</strong></td>
            <td><strong>Excluir</strong></td>
        </tr>      

        <?php          

            while($campo=mysqli_fetch_array($seleciona)){?>
            
            <tr>
                
                <td><?=$campo["id"]?></td>
                <td><?=$campo["nome"]?></td>
                <td><?=$campo["telefone"]?></td>
                <td><?=$campo["especialidade"]?></td>
                <td><?=$campo["observacao"]?></td>
                <td><a href="editar.php?editaid=<?=$campo["id"]?>"><button>Editar</button><i class= "editar"></i></a></td>
                <td><button onClick="verifica(<?=$campo["id"]?>)">Excluir</button><i class= "fa fa-trash"></i></a></td> 
               
            </tr>

                  
        <?php }?>      
            
    </table>
</body>
</html>