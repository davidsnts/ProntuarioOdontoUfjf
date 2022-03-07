<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $conexaoClass = new Conexao();
        $conexao = $conexaoClass->conectar();

        $nvl  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
 
        include("acoes/conecta.php");
        $seleciona=mysqli_query($conexao, "select * from usuarios order by id asc");
    }else{
        echo "<script>window.location = 'index.php'</script>";
    }
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/dashboard.css" />
        <title>Dashboard - <?php echo $nome; ?></title>
        <script type = "text/jscript" src="script/excluirUsr.js"></script>
    </head>
    <body>

    <div class="cabecalho">
        
        <div>
            <img src="imagens/logoufjf2.png" alt="" class="logoufjf">
        </div>
        <div class="titulo">
             FACULDADE DE ODONTOLOGIA - UFJF      
        </div>
    </div>

    <div class="usuarioStatus">
        <div>
            <div class = "menu">
                <span><?php echo "Olá ". $nome. ", Nivel de acesso: ".$nvl ?></span>                 
                <a class = "links" href="lista.php">Acessar Lista de Pacientes</a>
                <a class = "links" href="cadastroPaciente.php">Cadastrar Pacientes</a>
                <a class = "links" href="acoes/logout.php">Sair</a>        
            </div>
            
                
                        
        </div>
    </div>   

    
    <?php if($nvl == "0"): ?>)

    <h1 class="titulo"><center>Gerenciar Usuários do sistema</center></h1>    
        
    <div>       
        <table class = "tabela">
        <tr>
            <td>Email</td>
            <td>Senha</td>
            <td>Nome</td>
            <td>Nivel</td>
            <td>ID</td>
            <td>Excluir</td>
            <td>Editar</td>     
        </tr>

        <?php          

            while($campo=mysqli_fetch_array($seleciona)){?>            
            <tr>                
                <td><?=$campo["email"]?></td>
                <td><?=$campo["senha"]?></td>
                <td><?=$campo["nome"]?></td>
                <td><?=$campo["nivel"]?></td>
                <td><?=$campo["id"]?></td>
                <td><a href="editarUsr.php?editaid=<?=$campo["id"]?>"><button>Editar</button><i class= "editar"></i></a></td>
                <td><button onClick="verifica(<?=$campo["id"]?>)">Excluir</button><i class= "fa fa-trash"></i></a></td>                
            </tr>                  
        <?php }?>      
              
        </table>
    </div>  

    <div>

    <div>
            <?php 
                include("acoes/conecta.php");
                $seleciona=mysqli_query($conexao, "select * from usuarios order by id asc");
                
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

    <h1 class="titulo"><center>Cadastrar Novo Usuário do sistema</center></h1>    
    
    <form method = "get" action="gravaUsr.php" class="formularioform">
    <input type="text" name="nome" placeholder="Nome" required class ="input"><br>
    <input type="text" name="email" placeholder="Email" required class ="input"><br>
    <input type="text" name="senha" placeholder="Senha" required class ="input"><br>
    <label for="nivel">Nivel de acesso</label>
	<select id="nivel" name="nivel">
		<option value="0">administrador</option>
		<option value="1">triagem</option>
		<option value="2">visitante</option>
	</select>    
    <input type="submit" value="CADASTRAR" class = "botform">
    

    

    </div>



    </div>

    <?php endif; ?>
    </body>
</html>