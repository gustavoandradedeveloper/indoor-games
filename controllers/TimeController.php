<?php

    session_start();
    require "../models/entidades/Jogadores.php";
    require "../models/dao/JogadorService.php"; 
    require "../models/conexao.php";

    require "../models/entidades/Times.php";
    require "../models/dao/TimeService.php"; 
    
    
    class TimeController{
      private $menuEscolhido;

      public function __construct($menuEscolhido){

        $this->menuEscolhido = $menuEscolhido;

        $this->menu($this->menuEscolhido);

      }





      function menu($menuEscolhido){
        
        switch($menuEscolhido){

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

        $_SESSION['listaAtualizadaDeTimes'] = $listaatualizada;
        header("location: ../views/time/index.php");  
      }





      public function atualizarTime(){
        $objTime = new Times();     
        $objTime->__set('time_nome',$_POST['txtNome']);
        $objTime->__set('time_id',$_POST['txtId']);

        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);
       
        $listaatualizada =$objTimeService->atualizarTime($objTime);
        
        $_SESSION['listaAtualizadaDeTimes'] = $listaatualizada;
        
        header('location: ../views/time/index.php');
      }





      function listarTime(){
        $objTime = new times();
        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);

        $listaTimes = $objTimeService->listarTime();
  
        $_SESSION['listaAtualizadaDeTimes'] = $listaTimes;
        header('location: ../views/time/index.php');
      }





      function editarTime(){
        $objTime = new Times();
        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);

        $time_id = $_GET['timeId'];
        $time = $objTimeService->editarTime($time_id);
        $_SESSION['timeSelecionado'] = $time;
        header('location:../views/time/edit.php');
      }







      function deletarTime(){
          $idTime = $_GET['timeId'];
          $objConexao = new Conexao();
          $objTime = new Times(); 
          $objTimeService = new TimeService($objConexao,$objTime);
          
          $retorno = $objTimeService->deletarTime($idTime);
          
          $_SESSION['listaAtualizadaDeTimes'] = $retorno;
       
          header('location: ../views/time/index.php');

      }
    }





  isset($_GET['menu'])?$menuEscolhido = $_GET['menu']:$menuEscolhido = null;
  $objJogadorController = new TimeController($menuEscolhido);

?>