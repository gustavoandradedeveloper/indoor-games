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
              $this->inserirJogador();
            break;
          
          case 'listar':
              $this->listarJogador();
            break;

          case 'editar':
              $this->editarJogador();
            break;

          case 'atualizar':
              $this->atualizarJogador();
            break;
          case 'excluir':
            $this->deletarJogador();
          break;
        }
    
      }

      
      function inserirJogador(){
        $objJogador = new Jogadores();
        $objJogador->__set('jogador_nome',$_POST['txtNome']);
        $objJogador->__set('jogador_cpf',$_POST['txtCpf']);
        $objJogador->__set('jogador_time_id',$_POST['txtTimeId']);

        $objConexao = new Conexao();
        $objJogadorService = new JogadorService($objConexao,$objJogador);
        $objJogadorService->inserirJogador();

        $listaatualizada =$objJogadorService->atualizarJogador($objJogador);

        $_SESSION['listaatualizada'] = $listaatualizada;
        header("location: ../views/jogador/index.php");
        
      }



      function listarJogador(){
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
        header('location: ../views/jogador/index.php');
      }




      function editarJogador(){
        $objJogador = new Jogadores();
        $objConexao = new Conexao();
        $objJogadorService = new JogadorService($objConexao,$objJogador);

        $objTime = new times();
        $objConexao = new Conexao();
        $objTimeService = new TimeService($objConexao,$objTime);



        $listaTimes = $objTimeService->listarTime();

        $jogador_id = $_GET['editar'];
        $jogador = $objJogadorService->editarJogador($jogador_id);
      
        $_SESSION['jogadorSelecionado'] = $jogador;
        $_SESSION['listaTimes'] = $listaTimes;
        header('location:../views/jogador/edit.php');
      }









      public function atualizarJogador(){
          $objConexao = new Conexao();
          $objJogador = new Jogadores();     

          $objJogador->__set('jogador_nome',$_POST['txtNome']);
          $objJogador->__set('jogador_cpf',$_POST['txtCpf']);
          $objJogador->__set('jogador_time',$_POST['txtTimeId']);
          $objJogador->__set('jogador_id',$_POST['txtId']);
          

          $objJogadorService = new JogadorService($objConexao,$objJogador);
         
      
          $listaatualizada =$objJogadorService->atualizarJogador($objJogador);
          /* echo'<pre>'; 
          print_r($listaatualizada);
          echo'</pre>';  */
          $_SESSION['listaatualizada'] = $listaatualizada;
          header('location: ../views/jogador/index.php');
          

      }





      function deletarJogador(){
          $n = $_GET['excluir'];
          $objConexao = new Conexao();
          $objJogador = new Jogadores(); 
          $objJogadorService = new JogadorService($objConexao,$objJogador);
          $retorno = $objJogadorService->deletarJogador($n);
          $_SESSION['listaatualizada'] = $retorno;
          header('location: ../views/jogador/index.php');

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