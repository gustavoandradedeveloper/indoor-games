<?php
    class JogadorService{

        private $conexao ;
        private $jogador ;




        public function __construct(Conexao $objconexao, Jogadores $objJogador){
            $this->conexao = $objconexao->conectar();
            $this->jogador = $objJogador;
        }


        public function inserirJogador(){
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




        public function listarJogador(){
            $sql='
                select * from jogadores;
            ';

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            $listaJogadores = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $listaJogadores;
        }
        
        public function listarJogadorTime(){
            $sql='
                select 
                    * 
                from 
                    jogadores
                 right join
                    times
                on
                    (jogadores.jogador_time_id = times.time_id )
                order by
                jogador_id asc
                
            ';
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            $listaJogadores = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $listaJogadores;
        }
        
        


        public function editarJogador($jogador_id){
            $sql='
                select 
                    * 
                from 
                    jogadores 
                where
                    jogador_id = :jogador_id
            ';
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':jogador_id',$jogador_id);
            $stmt->execute();
            $jogador = $stmt->fetch(PDO::FETCH_OBJ);
            return $jogador;
        }




        public function atualizarJogador($jogador){
            
            $objJogador = $jogador;

            $sql="
                update 
                    jogadores
                set
                    jogador_nome    = ?,
                    jogador_cpf     = ?,
                    jogador_time_id = ?
                where
                    jogador_id = ?
            ";
           
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $objJogador->__get('jogador_nome'));
            $stmt->bindValue(2, $objJogador->__get('jogador_cpf'));
            $stmt->bindValue(3, $objJogador->__get('jogador_time')); 
            $stmt->bindValue(4, $objJogador->__get('jogador_id'));    

            $stmt->execute();
            return $this->listarJogadorTime();

            
            
        }
        



        public function deletarJogador($n){
            $s = $n;
            $sql="
                delete from 
                    jogadores
                where
                    jogador_id = $s 
            ";
            $stmt = $this->conexao->prepare($sql);
            $retorno = $stmt->execute();
            return $this->listarJogadorTime();


        }


    }

?>