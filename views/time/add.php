<?php
    session_start();
    $jogador = $_SESSION['jogadorSelecionado'];
    $listaTimes = $_SESSION['listaTimes'];
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
              <div class="form">
                  <h1>formulário</h1>
                    <form action="../../controllers/TimeController.php?metodo=inserir" method="post">
                        <label for="">Nome:</label>
                        <input type="text" name="txtNome" placeholder="Insira o nome" required>

                        <input type="submit" value="cadastrar" class="btn cad">
                        <input type="reset" value="limpar" class="btn limpar">
                  </form>
              </div>
          </div>
      </main>
  </body>
</html>