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
        <form action="../../controllers/JogadorController.php" method="post">
            <fieldset>

                <label for="">Nome</label>
                <input type="text" name="txtNome"><br><br>


                <label for="">CPF</label>
                <input type="text" name="txtCpf"><br><br>

                

                <label for="">Escolhar o time</label>
                <select name="txtTimeId">
                    <option value="1">Náutico</option>
                    <option value="2">Sport</option>
                    <option value="3">Santa Cruz</option>
                </select><br><br>

                <input type="submit" value="cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>