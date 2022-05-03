<?php

    class JogadorService{

        private $conexao ;
        private $jogador ;
        

        public function __construct(Conexao $objconexao, Jogadores $objJogador){
            $this->conexao = $objconexao->conectar();
            $this->jogador = $objJogador;
        }
            
        
        public function inserir(){
            try{
                $sql = 'insert into jogadores (
                    jogador_nome, jogador_cpf , jogador_time_id 
                ) values (
                    :nome, :cpf, :time_id
                )';

                $stmt = $this->conexao->prepare($sql);
                $stmt->bindValue(':nome',$this->jogador->__get('jogador_nome'));
                $stmt->bindValue(':cpf',$this->jogador->__get('jogador_cpf'));
                $stmt->bindValue(':time_id',$this->jogador->__get('jogador_time_id'));

                $retorno = $stmt->execute();
                echo $retorno;
            }catch(PDOException $e){

            }
        }


        public function listar(){

        }


        public function atualizar(){

        }

        
        public function deletar(){

        }

    }



?>