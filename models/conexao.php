<?php

    class conexao{

        private $host    ='localhost';
        private $dbname  ='indoor_games';
        private $usuario ='root';
        private $senha   ='';

        public function conectar(){
            try{
                $objConexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->usuario",
                    "$this->senha"
                );
                return $objConexao;
            }catch(PDOException $e){
                echo "Erro ".$e->getCode() ."Mensagem ". $e->getMessage();
            }

        }
    }

    


?>