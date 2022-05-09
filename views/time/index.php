<?php 
    session_start();
    $listaTime = $_SESSION['listaAtualizadaDeTimes'];    
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