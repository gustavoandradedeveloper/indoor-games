<?php
  
    require "../models/entidades/Jogadores.php";
    require "../models/dao/JogadorService.php"; 
    require "../models/conexao.php";

    echo'<pre>';
    print_r($_POST);
    echo '</pre>';

    $objJogador = new Jogadores();
    $objJogador->__set('jogador_nome',$_POST['txtNome']);
    $objJogador->__set('jogador_cpf',$_POST['txtCpf']);
    $objJogador->__set('jogador_time_id',$_POST['txtTimeId']);


    /* echo $objJogador->__get('jogador_nome'); */

    $objConexao = new Conexao();
    $objJogadorService = new JogadorService($objConexao,$objJogador);
    $objJogadorService->inserir();     
?>