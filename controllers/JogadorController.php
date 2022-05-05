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
        print_r($objJogadorService);
        //header('location: ../views/jogador/index.php?inserido=1');
        $this->listarJogador($_GET['inserido']=1); 
      }



      function listarJogador(){
        $objJogador = new Jogadores();
        $objConexao = new Conexao();
        $objJogadorService = new JogadorService($objConexao,$objJogador);
        $objListaJogadores = $objJogadorService->listarJogador();
        $_SESSION['listaJogadores'] = $objListaJogadores;
        header('location: ../views/jogador/index.php?inserido='.$_GET['inserido']);
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
        
        /* echo'<pre>';
        print_r($listaTimes);
        echo '</pre>'; */
 
        $_SESSION['jogadorSelecionado'] = $jogador;
        $_SESSION['listaTimes'] = $listaTimes;
        header('location:../views/jogador/edit.php');
      }




      function deletarJogador(){

      }
    
  }


    if(isset($_GET['metodo'])){

      $metodo = $_GET['metodo'];

    }else if(isset($_GET['editar'])){

      $metodo = 'editar';
      
    }

  $objJogadorController = new JogadorController($metodo);
  //$objJogadorController->editarJogador();


?>