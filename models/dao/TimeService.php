<?php

    class timeService{

        private $conexao ;
        private $time ;
        

        public function __construct(Conexao $objconexao, times $objtime){
            $this->conexao = $objconexao->conectar();
            $this->time = $objtime;
        }
            
        
        public function inserirTime(){
            try{
                $sql = 'insert into times (
                    time_nome
                ) values (
                    :nome
                )';

                $stmt = $this->conexao->prepare($sql);
                $stmt->bindValue(':nome',$this->time->__get('time_nome'));
                $retorno = $stmt->execute();
                
            }catch(PDOException $e){

            }
        }


        public function listarTime(){
            $sql='
                select * from times;
            ';

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            $listatimes = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $listatimes;
        }

    
        public function atualizarTime($time){
            
            $objTime = $time;

            $sql="
                update 
                    times
                set
                    time_nome  = ?
                where
                    time_id = ?
            ";
           
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $objTime->__get('time_nome')); 
            $stmt->bindValue(2, $objTime->__get('time_id'));    

            $stmt->execute();
            return $this->listarTime();

            
            
        }
  

        public function editarTime($time_id){
            $sql='
                select 
                    * 
                from 
                    times 
                where
                    time_id = :time_id
            ';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':time_id',$time_id);
            $stmt->execute();
            $time = $stmt->fetch(PDO::FETCH_OBJ);
            return $time;
        }

        
        public function deletarTime($n){
            
            $s = $n;
            $sql="
                delete from 
                    times
                where
                    time_id = $s
            ";
            $stmt = $this->conexao->prepare($sql);
            $retorno = $stmt->execute(); 
            return $this->listarTime();


        }

        

    }



?>