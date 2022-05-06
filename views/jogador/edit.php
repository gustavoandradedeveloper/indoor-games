<?php
  
    session_start();
    $jogador = $_SESSION['jogadorSelecionado'];
    $listaTimes = $_SESSION['listaTimes'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogador</title>
</head>
<body>
    <div>
        <form action="../../controllers/JogadorController.php?metodo=atualizar" method="post">
            <fieldset>
                
                <label for="">Nome</label>
                <input type="text" name="txtNome" value="<?= $jogador->jogador_nome?>"><br><br>


                <label for="">CPF</label>
                <input type="text" name="txtCpf" value="<?= $jogador->jogador_cpf?>"><br><br>
                
                

                <label for="">Escolhar o time</label>
                <select name="txtTimeId">
                    <?php foreach($listaTimes as $time ){?>

                        <option value="<?= $time->time_id?>">
                            <?= $time->time_nome?>
                        </option>
                        
                        <?php }?>
                </select><br><br>
                    <input type="hidden" name="txtId" value="<?= $jogador->jogador_id?>">
                    <input type="submit" value="Atualizar"><br>
                    <a href="../../index.php">voltar</a>
            </fieldset>
        </form>
    </div>
</body>
</html>