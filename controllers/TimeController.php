<?php
    session_start();
    require "../models/entidades/Jogadores.php";
    require "../models/dao/JogadorService.php"; 
    require "../models/conexao.php";

    require "../models/entidades/Times.php";
    require "../models/dao/TimeService.php"; 
    
    
    class JogadorController{
    
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

          case 'atualizar':
              $this->atualizarTime();
            break;
          case 'excluir':
            $this->deletarTime();
          break;
        }
    
      }

      
      function inserirTime(){
        $objTimes = new Times();
        $objTimes->__set('time_nome',$_POST['txtNome']);

        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTimes);
        $objTimeService->inserirTime($objTimes);
        
        $listaatualizada =$objTimeService->listarTime($objTimes);

        $_SESSION['listaatualizadatime'] = $listaatualizada;
        header("location: ../views/time/index.php");
        
      }

      public function atualizarTime(){
        $objConexao = new Conexao();
        $objTime = new Times();     

        $objTime->__set('time_nome',$_POST['txtNome']);
        $objTime->__set('time_id',$_POST['txtId']);
        /*  echo'<pre>'; 
          print_r($_POST['txtNome']);
          echo'</pre>'; 
          exit(); */

        $objTimeService = new TimeService($objConexao,$objTime);
       
    
        $listaatualizada =$objTimeService->atualizarTime($objTime);
        
        $_SESSION['listaatualizadatime'] = $listaatualizada;
        header('location: ../views/time/index.php');
        

    }


      function listarTime(){
        $objJogador = new Jogadores();
        $objTime = new times();
        $objConexao = new Conexao();
        $objJogadorService = new JogadorService($objConexao,$objJogador);
        $objTimeService = new TimeService($objConexao,$objTime);
        $listaTimes = $objTimeService->listarTime();
        
        $objListaJogadores = $objJogadorService->listarJogadorTime();
        $_SESSION['listaTimes'] = $listaTimes;
        
        $_SESSION['listaJogadores'] = $objListaJogadores;
        /* print_r($_SESSION['listaJogadores']);
        exit(); */
        header('location: ../views/time/index.php');
      }




      function editarTime(){
        $objTime = new Times();
        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);

        $objTime = new Times();
        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);



        $listaTimes = $objTimeService->listarTime();

        $time_id = $_GET['editar'];
        $time = $objTimeService->editarTime($time_id);
      
        $_SESSION['timeSelecionado'] = $time;
        $_SESSION['listaTimes'] = $listaTimes;
        header('location:../views/time/edit.php');
      }







      function deletarTime(){
          $n = $_GET['excluir'];
          $objConexao = new Conexao();
          $objTime = new Times(); 
          $objTimeService = new TimeService($objConexao,$objTime);
          $retorno = $objTimeService->deletarTime($n);
          $_SESSION['listaatualizadatime'] = $retorno;
          header('location: ../views/time/index.php');

      }


    
  }


    if(isset($_GET['metodo'])){

      $metodo = $_GET['metodo'];

    }else if(isset($_GET['editar'])){

      $metodo = 'editar';
      
    }else if(isset($_GET['excluir'])){
      $metodo = 'excluir';
    }

  $objJogadorController = new JogadorController($metodo);
  //$objJogadorController->editarJogador();


?>