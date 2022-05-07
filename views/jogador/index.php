<!-- <?php 
    session_start();
    $listaJogadores = $_SESSION['listaatualizada'];

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Jogadores</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>

    <div>
        <?php if(isset($_GET['inserido']) && ($_GET['inserido']==1)){?>
            <div class="msg_inserido_com_sucesso">
                <p>Jogador inserido com sucesso!</p>
            </div>
        <?php }?>

        <div class="table">
            <table border="2px" class="tabelaJogador">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Time</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php foreach($listaJogadores as $jogador){?>
                <tr>
                    
                    <td><?= $jogador->jogador_nome?></td>
                    <td><?= $jogador->jogador_cpf?></td>
                    <td><?= $jogador->time_nome?></td>

                    <td>
                        <a href="<?php echo"../../controllers/JogadorController.php?editar=".$jogador->jogador_id?>">Editar</a>
                    </td>
                    
                    <td>
                        <a href="<?php echo"../../controllers/JogadorController.php?excluir=".$jogador->jogador_id?>">Excluir</a>
                    </td>
                    
                </tr>
                <?php }?>
            </table>
        </div>
        <a href="../../index.php">voltar</a>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Indoor Games</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <meta name="description" content="Sistema para jogos internos">    
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"> 
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <div class="conteudo"> 
            <div class="base-central">
                <div class="base-topo">
                    <a href="index.php" class="titulo-home">Indoor-Games</a>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="index.php">Home</a>|</li>
                        <li><a href="index.php">Cadastrar novo</a>|</li>
                        <li><a href="index.php">Lista de Jogadores</a></li>
                    </ul>
                </nav>
                <div class="base-home">
                    <h1 class="titulo"><span>Lista </span> de jogadores</h1>
                    <div class="base-lista">
                        <span class="qtd">
                            <b>18</b> Jogadores cadastrado
                        </span>
                        <div class="tabela">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Time</th>
                                        <th colspan="2">Alterar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gustavo</td>
                                        <td>123.456.789-12</td>
                                        <td>8 série </td>
                                        <td>
                                            <a href="" class="btn editar">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn excluir">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Gustavo</td>
                                        <td>123.456.789-12</td>
                                        <td>8 série </td>
                                        <td>
                                            <a href="" class="btn editar">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn excluir">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Gustavo</td>
                                        <td>123.456.789-12</td>
                                        <td>8 série </td>
                                        <td>
                                            <a href="" class="btn editar">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn excluir">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Gustavo</td>
                                        <td>123.456.789-12</td>
                                        <td>8 série </td>
                                        <td>
                                            <a href="" class="btn editar">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn excluir">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Gustavo</td>
                                        <td>123.456.789-12</td>
                                        <td>8 série </td>
                                        <td>
                                            <a href="" class="btn editar">Editar</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn excluir">Excluir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="paginacao">
                            <li>
                                <a href="">anterior</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">2</a>
                            </li>
                            <li>
                                <a href="">3</a>
                            </li>
                            <li>
                                <a href="">4</a>
                            </li>
                            <li>
                                <a href="">5</a>
                            </li>
                            <li>
                                <a href="">próximo</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rodape-cadastro">
                    <p>Direitos reservado @gustavoandradedeveloper.com </p>
                </div>

            </div>
        </div>
    </body>
</html>