<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="protected/ASSETS/CSS/main.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Login</h1>
        </header>
        <form action="protected/script_login.php" method="POST">
            <div class="input-row">
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
            </div>

            <div class="input-row">
                <label for="senha">Senha</label>
                <input type="password" name="password" id="login">
            </div>
        </form>

        <div class="btn-container">
            <button class="btn" type="submit">Entrar</button>
        </div>
    </div>
</body>
</html>