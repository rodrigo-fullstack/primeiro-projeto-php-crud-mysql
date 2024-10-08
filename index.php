<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="protected/ASSETS/CSS/main.css">
    <link rel="stylesheet" href="protected/ASSETS/CSS/input.css">
    <link rel="stylesheet" href="protected/ASSETS/CSS/login.css">

</head>
<body>
    <div class="container">
        <header>
            <h1>Login</h1>
            <p>Digite os dados do administrador:</p>
        </header>
        <form action="protected/script_login.php" method="POST">
            <div class="input-row">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" class="input-text">
            </div>

            <div class="input-row">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="input-text">
            </div>
        </form>

        <div class="btn-container">
            <button class="btn" type="submit">Entrar</button>
        </div>
    </div>
</body>
</html>