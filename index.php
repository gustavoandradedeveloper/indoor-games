
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/viewport1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
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
                        <h1><a href="index.php">INDOOR-GAMES</a></h1>
                    </div>
                    <div class="main-nav-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="controllers/TimeController.php?menu=listar">Times</a></li>
                            <li><a href="controllers/JogadorController.php?menu=listar">Jogadores</a></li>
                           <!--  <li><a href="controllers/logoff.php">login</a></li> -->
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
                    <div class="conteudo">
                        <div class="texto">
                            <h5 class="texto-titulo">Pré-requisitos</h5>
                            <p>Tecnologias requeridas: PHP, MySQL, CSS, HTML.</p>
                            <p>Deverá ser adotado o modelo MVC (nas pastas).</p>
                            <p>Ter orientação a objetos, mesmo simples (classes e objetos).</p>
                            <p>Não será permitido o uso de Bootstrap ou frameworks front-end</p>
                            <p>Todas as telas devem ser responsivas.</p>
                            <p>As 4 tecnologias requeridas devem ser usadas.</p>
                            <p>Projeto em si:</p>
                            
                            <p>Um CRUD referente a qualquer tema desejado (times de futebol, filmes ou qualquer tema)
                            </p>
                            
                            <p>Conforme um CRUD funciona, deverá dispor das 4 funcionalidades básicas: listar, criar um novo, editar um existente e excluir um objeto.</p> 

                            <p>O tema principal deve ter um segundo tema para haver relacionamento entre as entidades, exemplo: o jogador Neymar joga no time PSG, então eu preciso ter o time PSG em uma segunda tabela no banco de dados para fazer o relacionamento com o jogador Neymar através da chave estrangeira.</p>

                            <p>
                                O segundo tema pode ter apenas uma telinha para o cadastro, não precisa ser um CRUD. Mas o tema principal precisa ser um CRUD.
                            </p>
                            
                            <p>Data final para entrega: 06/05/2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html> 
