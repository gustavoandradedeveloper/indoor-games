<?php 
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
</html>