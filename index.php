<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        echo "<script>window.location = 'dashboard.php'</script>";
    }
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ODONTOLOGIA - UFJF</title>
        <link rel="stylesheet" type="text/css" href="style/acesso.css" />
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
    </head>
    <body>
        <header>FACULDADE DE ODONTOLOGIA - UFJF </header>        

        <div id="mensagem">

            
        </div>

        <div id="formulario">
            <form id="formularioLogin">
                <span class="title">Acesse sua conta</span>

                <div id="linha">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>

                <div id="linha">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" />
                </div>

                <div id="button">
                    <button id="btnEntrar">Entrar</button>
                </div>
            </form>

            <form id="formularioCadastro">
                <span class="title">Crie sua conta</span>

                <div id="linha">
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro" />
                </div>

                <div id="linha">
                    <label for="emailCadastro">Email</label>
                    <input type="text" name="emailCadastro" id="emailCadastro" />
                </div>

                <div id="linha">
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro" />
                </div>

                <div id="button">
                    <button id="btnCadastrar">Cadastrar</button>
                </div>
            </form>

            <div id="textoCadastro">
                <span class="title">Não possui uma conta?</span>
                <span class="subtitle">Cadestre Aqui. <br>Acesso liberado pelo administrador do sistema.</span>
                <button id="btnCadastro" class="change">Cadastrar</button>
            </div>

            <div id="textoLogin">
                <span class="title">Já possui uma conta?</span>
                <span class="subtitle">Seu acesso não foi aprovado? Entre em contato com o administrador do sistema.</span>
                <button id="btnLogin" class="change">Entrar</button>
            </div>
        </div>

        <footer>Sistema de acesso Odonto - UFJF &copy; 2022</footer>
    </body>
</html>