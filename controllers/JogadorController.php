<?php
    session_start();
    require "../models/entidades/Jogadores.php";
    require "../models/dao/JogadorService.php"; 
    require "../models/conexao.php";

    require "../models/entidades/Times.php";
    require "../models/dao/TimeService.php"; 
    
    
    class JogadorController{
    
      private $menu;
  
      public function __construct($menu){
        $this->menu = $menu;
        $this->menu($this->menu);
      }
    

      function menu($menu){
        
        switch($menu){

          case 'cadastro':

            $this->cadastro();
            break;

          case 'inserir':

            $this->inserirJogador();
            break;

          
          case 'listar':

            $this->listarJogador();
            break;

          case 'buscarPorId':

            $this->buscarPorId();
            break;

          case 'atualizar':

            $this->editarJogador();
            break;


          case 'excluir':

            $this->deletarJogador();
            break;
        }
    
      }




      
      // esse metodo foi criado pois em cadastro precisar que seja carregado antes a lista de times para que seja exibido no campo select
      function cadastro(){
        header('location: ../views/jogador/add.php');
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

        header('location: ../controllers/JogadorController.php?menu=listar');         
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
          
          header('location: ../views/jogador/index.php');
      }





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
        header('location: ../controllers/JogadorController.php?menu=listar');
    }




      function buscarPorId(){
        $jogador_id = $_GET['jogadorId'];
          
        $objJogador = new Jogadores();
        $objTime = new times();
        $objConexao = new Conexao();

        $objJogadorService = new JogadorService($objConexao,$objJogador);
        $objTimeService = new TimeService($objConexao,$objTime);
      
        $objListaJogadores = $objJogadorService->listarPorJogador($jogador_id);
        $objListaTimes = $objTimeService->listarTime();

        $_SESSION['listaJogadores'] = $objListaJogadores;
        $_SESSION['listaTimes'] = $objListaTimes;
       
        header('location: ../views/jogador/edit.php');
      }





      function deletarJogador(){
          $jogadorId = $_GET['jogadorId'];
          $objConexao = new Conexao();
          $objJogador = new Jogadores(); 
          $objJogadorService = new JogadorService($objConexao,$objJogador);
          $retorno = $objJogadorService->deletarJogador($jogadorId);
          $_SESSION['listaJogadores'] = $retorno;
          header('location: ../views/jogador/del.php');
      }
  }



    isset($_GET['menu'])?$menuEscolhido = $_GET['menu']:$menuEscolhido = null;
    $objJogadorController = new JogadorController($menuEscolhido);

?>