<?php
    require_once '../models/entidades/Jogadores.php';
    require_once '../models/JogadorModel.php';

    $objJogador = new Jogadores();
    $objJogador->__set('jogador_cpf',$_POST['txtCpf']);
    $objJogador->__set('jogador_nome',$_POST['txtNome']);
    $objJogador->__set('jogador_time_id',$_POST['txtTimeId']);

   

    
?>