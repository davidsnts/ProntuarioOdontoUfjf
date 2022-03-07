<?php
    Class Conexao{     
        
        private $server = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "id18553398_bdteste";

        public function conectar(){
            try{
                $conexao = new PDO("mysql:host=$this->server;dbname=$this->banco", $this->usuario, $this->senha);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $erro){
                $conexao = null;
            }

            return $conexao;
        }
    };   
?>