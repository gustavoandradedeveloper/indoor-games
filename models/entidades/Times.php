<?php

    class Times{
        
        private $time_id;
        private $time_nome;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

    }


?>