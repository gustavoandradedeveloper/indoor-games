<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../../controllers/LoginController.php"  method="POST">

        <label for="">Email</label><br>
        <input type="email" name="txtEmail"><br>

        <label for="">Senha</label><br>
        <input type="password" name="txtSenha"><br><br>

        <button>Entrar</button>
    </form>
</body>
</html>