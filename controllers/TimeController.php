<?php
    session_start();
    require "../models/entidades/times.php";
    require "../models/dao/timeService.php"; 
    require "../models/conexao.php";
    
    
    class timeController{
    
      private $metodo;
  
      public function __construct($metodo){
        $this->metodo = $metodo;
        $this->escolha($this->metodo);
      }
    

      function escolha($var){
        
        switch($var){

          case 'inserir':
            $this->inserirTime();
            break;
          
          case 'listar':
            $this->listarTime();
            break;

          case 'editar':
            $this->editarTime();
            break;
        }
    
      }

      
      function inserirTime(){
        $objtime = new times();
        $objtime->__set('time_nome',$_POST['txtNome']);

        $objConexao = new Conexao();
        $objtimeService = new timeService($objConexao,$objtime);
        $objtimeService->inserirTime();
        print_r($objtimeService);
        //header('location: ../views/time/index.php?inserido=1');
        $this->listarTime($_GET['inserido']=1); 
      }



      function listarTime(){
        $objtime = new times();
        $objConexao = new Conexao();
        $objtimeService = new timeService($objConexao,$objtime);
        $objListatimes = $objtimeService->listarTime();
        $_SESSION['listatimes'] = $objListatimes;
        header('location: ../views/time/index.php?inserido='.$_GET['inserido']);
      }




      function editarTime(){
        $objtime = new times();
        $objConexao = new Conexao();
        $objtimeService = new timeService($objConexao,$objtime);
        $time_id = $_GET['editar'];
        $time = $objtimeService->editarTime($time_id);
        
        /* echo'<pre>';
        print_r($time);
        echo '</pre>';
 */
        $_SESSION['timeSelecionado'] = $time;
        header('location:../views/time/edit.php');
      }




      function deletarTime(){

      }
    
  }


    if(isset($_GET['metodo'])){

      $metodo = $_GET['metodo'];

    }else if(isset($_GET['editar'])){

      $metodo = 'editar';
      
    }

  $objtimeController = new timeController($metodo);
 


?>