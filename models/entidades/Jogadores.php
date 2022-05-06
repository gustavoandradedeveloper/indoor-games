<?php

    class Jogadores {
        private $jogador_id;
        private $jogador_nome;
        private $jogador_cpf;
        private $jogador_time_id;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }


?>