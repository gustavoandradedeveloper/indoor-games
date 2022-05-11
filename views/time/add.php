
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

                        <input type="submit" value="cadastrar" class="btn-cadastrar">
                        <input type="reset" value="limpar" class="btn-limpar">
                  </form>
              </div>
          </div>
      </main>
  </body>
</html> -->












































<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Indoor Games</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <meta name="description" content="Sistema para jogos internos">    
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
        <link rel="stylesheet" type="text/css" href="assets/css/viewport.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
                            <li><a href="index.php">Home</a> <span> | </span></li>
                            <li><a href="controllers/TimeController.php?metodo=listar">times</a><span> | </span></li>
                            <li><a href="controllers/JogadorController.php?metodo=listar">jogadores</a></li>
                        </ul>
                    </nav> 
                </div>
            </div>
       </header>
       <main>
            <div class="main-content">
                

                <div class="textos">
                <h2>Projeto</h2>    
                <ul type="none">
                        <h5>Pré-requisitos:</h5>
                        <li>Tecnologias requeridas: PHP, MySQL, CSS, HTML.</li>
                        <li>Ter orientação a objetos, mesmo simples (classes e objetos).</li>
                        <li>Todas as telas devem ser responsivas.</li>
                        <li>Não será permitido o uso de Bootstrap ou frameworks front-end.</li>
                        <li>Deverá ser adotado o modelo MVC (nas pastas).</li>
                        <li>As 4 tecnologias requeridas devem ser usadas.</li>
                        <li>Projeto em si:</li>
                        <li>Criar um CRUD referente a qualquer tema desejado (times de futebol, filmes, séries, escolas, faculdades, tecnologias, enfim, qualquer tema).</li>
                        <li>Conforme um CRUD funciona, deverá dispor das 4 funcionalidades básicas: listar, criar um novo, editar um existente e excluir um objeto.</li>
                        <li>O tema principal deve ter um segundo tema para haver relacionamento entre as entidades, exemplo: o jogador Neymar joga no time PSG, então eu preciso ter o time PSG em uma segunda tabela no banco de dados para fazer o relacionamento com o jogador Neymar através da chave estrangeira.</li>
                        <li>O segundo tema pode ter apenas uma telinha para o cadastro, não precisa ser um CRUD. Mas o tema principal precisa ser um CRUD.</li>
                        <li><span>Data final para entrega: 06/05/2022</span></li>
                    </ul>
                </div>
            </div>
       </main>
       <footer>

       </footer>
    </body>
</html> 


<!-- 


 <!DOCTYPE html>
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
    
    <title>Indoor Games - Sistema para jogos internos</title>
</head>
<body>
    <header>
        <div class="main-header">
            <div class="main-nav">
                <div class="main-nav-content">
                    <div class="main-nav-logo">
                        <h1><a href="#">INDOOR-GAMES</a></h1>
                    </div>
                    <div class="main-nav-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Times</a></li>
                            <li><a href="">Jogadores</a></li>
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
                    <div class="container-form">
                        <div class="titulo-cadastro">
                           
                        </div>
                        <div class="form-background">
                            <p>preencha com as informações do time</p>
                        </div>

                        <div class="form-content">
                            <form action="../../controllers/TimeController.php?metodo=inserir" method="post">
                                <label for="">Nome:</label>
                                <input type="text" name="txtNome" placeholder="Insira o nome" required>

                                 <input type="submit" value="cadastrar" class="btn cad">
                                <input type="reset" value="limpar" class="btn limpar"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>  
-->