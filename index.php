<!DOCTYPE html>
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