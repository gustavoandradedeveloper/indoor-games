 <?php 
    session_start();
    $listaTime = $_SESSION['listaAtualizadaDeTimes'];   
    /* print_r($listaTime);
    exit();  */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Indoor Games</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <meta name="description" content="Sistema para jogos internos">    
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"> 
        <link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/viewport.css">
    </head>
    <body>
    <header>
            <div class="header-content">
                <div class="header-titulo">
                    </h1 class="header-titulo">Indoor-games</h1>
                </div>
                <div class="header-menu">
                    <nav>
                        <ul>
                            <li><a href="../../index.php">Home</a> <span> | </span></li>
                            <li><a href="add.php">cadastrar</a><span> | </span></li>
                            <li><a href="index.php">listar</a></li>
                        </ul>
                    </nav> 
                </div>
            </div>
       </header>

       <main>
            <div class="conteudo"> 
                <div class="tabela">
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th colspan="2">Alterar</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php foreach($listaTime as $time){?>
                            <tr>
                                <td><?= $time->time_id?></td>
                                <td><?= $time->time_nome?></td>
                                <td>
                                <a href="<?php echo"../../controllers/TimeController.php?editar=".$time->time_id?>"class="btn-editar">Editar</a>
                                </td>
                    
                                <td>
                                    <a href="<?php echo"../../controllers/TimeController.php?excluir=".$time->time_id?>" class="btn-excluir">Excluir</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>





























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/viewport1.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,500i&display=swap"
          rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <header>
        <div class="main-header">
            <div class="main-nav">
                <div class="main-nav-content">
                    <div class="main-nav-logo">
                        <h1><a href="#">INDOOR-GAMES </a></h1>
                    </div>
                    <div class="main-nav-menu">
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
                            <li><a href="../jogador/index.php">Jogadores</a></li>
                            <li><a href="../../controllers/logoff.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-main-header">   
        </div>

    </header>
    <main>
        <div class="main">
            <div class="main-content">
                <div class="content">
                    <div class="content-itens">


                        <div class="itens1">
                            <div class="itens">
                                <a href="add.php">CADASTRAR</a>
                            </div>

                            <div class="itens">
                                <a href="">LISTAR</a>
                            </div>
                        </div>



                        <div class="itens2">
                            <div class="itens">
                                <a href="">EDITAR</a>
                            </div>
    
                            <div class="itens">
                                <a href="">EXCLUIR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>  -->