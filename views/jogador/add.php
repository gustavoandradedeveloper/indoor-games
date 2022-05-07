<!-- <?php
  
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
        <form action="../../controllers/JogadorController.php?metodo=inserir" method="post">
            <fieldset>

                <label for="">Nome</label>
                <input type="text" name="txtNome"><br><br>


                <label for="">CPF</label>
                <input type="text" name="txtCpf"><br><br>

                

                <label for="">Escolhar o time</label>
                <select name="txtTimeId">
                    <?php foreach($listaTimes as $time ){?>

                        <option value="<?= $time->time_id?>">
                            <?= $time->time_nome?>
                        </option>
                        
                        <?php }?>
                </select><br><br>

                <input type="submit" value="cadastrar">
                <a href="../../index.php">voltar</a>
            </fieldset>
        </form>
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
                    <h1 class="titulo"><span>Cadastro </span> de jogadores</h1>
                    <div class="base-formulario">
                        <form action="#" method="">
                            <label for="">Nome</label>
                            <input type="text" name="" placeholder="Insira o seu nome">

                            <label for="">CPF</label>
                            <input type="text" name="" placeholder="Insira o seu CPF">

                            <label for="">Escolhar o time</label>
                            <select name="txtTimeId">
                                <option value="1"> Nautico </option>
                                <option value="1"> Nautico </option>
                                <option value="1"> Nautico </option>
                                <option value="1"> Sport </option>
                            </select><br><br>

                            <input type="submit" value="cadastrar" class="btn cad">
                            <input type="reset" value="limpar" class="btn limpar">
                        </form>
                    </div>
                </div>

                <div class="rodape-cadastro">
                    <p>Direitos reservado @gustavoandradedeveloper.com </p>
                </div>

            </div>
        </div>
    </body>
</html>