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
          case 'cadastro':
            $this->cadastro();
            break;
          case 'inserir':
              $this->inserirJogador();
            break;
          
          case 'listar':
              $this->listarJogador();
            break;

          case 'editar':
              $this->edicao();
            break;

          case 'atualizar':
              $this->editarJogador();
            break;


          case 'excluir':
            $this->deletarJogador();
          break;
        }
    
      }

      function cadastro(){
        header('location: ../views/jogador/add.php');
      }

      function edicao(){
        $n = $_GET['editar'];

        $objJogador = new Jogadores();
        $objTime = new times();
        $objConexao = new Conexao();

        $objJogadorService = new JogadorService($objConexao,$objJogador);
        $objTimeService = new TimeService($objConexao,$objTime);
        

        $objListaJogadores = $objJogadorService->listarPorJogador($n);
        $listaTimes = $objTimeService->listarTime();

      /*   echo'<pre>';
        print_r($objListaJogadores);
        echo'</pre>';
            exit(); */
        
        
        $_SESSION['listaJogadores'] = $objListaJogadores;
        $_SESSION['listaTimes'] = $listaTimes;
       
        
        header('location: ../views/jogador/edit.php');
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

        header('location: ../controllers/JogadorController.php?metodo=listar');
        
        
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
          /* echo '<pre>';
          print_r($_SESSION['listaJogadores']);
          echo'</pre>';
          exit(); */
          header('location: ../views/jogador/index.php');
      }



/* 
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

 */







      public function editarJogador(){
          $objConexao = new Conexao();
          $objJogador = new Jogadores();     

          $objJogador->__set('jogador_nome',$_POST['txtNome']);
          $objJogador->__set('jogador_cpf',$_POST['txtCpf']);
          $objJogador->__set('jogador_time',$_POST['txtTimeId']);
          $objJogador->__set('jogador_id',$_POST['txtId']);
          

          $objJogadorService = new JogadorService($objConexao,$objJogador);
         
      
          $listaatualizada =$objJogadorService->atualizarJogador($objJogador);


          $_SESSION['listaJogadores'] = $listaatualizada;
          header('location: ../controllers/JogadorController.php?metodo=listar');
          

      }





      function deletarJogador(){
          $n = $_GET['excluir'];
          $objConexao = new Conexao();
          $objJogador = new Jogadores(); 
          $objJogadorService = new JogadorService($objConexao,$objJogador);
          $retorno = $objJogadorService->deletarJogador($n);
          $_SESSION['listaJogadores'] = $retorno;
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