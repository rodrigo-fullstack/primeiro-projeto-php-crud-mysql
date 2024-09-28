<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="ASSETS/CSS/main.css">
    <link rel="stylesheet" href="ASSETS/CSS/cadastro.css">
    <link rel="stylesheet" href="ASSETS/CSS/input.css">
</head>
<body>
    <div class="container">
        <section>
            <h1>Cadastro das Pessoas</h1>
            <p>Digite seus dados a seguir</p>
        </section>
        <form action="script_cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="input-row" id="name-box">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required class="input-text">
            </div>
            <div class="input-row" id="email-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="input-text">
            </div>
            <div class="input-row">
                <label for="tel" id="tel-box">Telefone:</label>
                <input type="tel" name="tel" id="tel" class="input-text">
            </div>
            <div class="input-row" id="endereco-box">
                <label for="endereco">Endereço: </label>
                <input type="adress" name="endereco" id="endereco" required class="input-text">
            </div>

            <div class="input-row" id="endereco-box">
                <label for="endereco">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="input-text" required>
            </div>

            <div class="input-row" id="endereco-box">
                <label for="file">Foto:</label>
                <input type="file" class="input-file" name="file" id="file" accept="image/*">
            </div>

            <div class="btn-container">
                <a href="index.php" class="btn btn-return">Voltar</a>
                <button type="submit" class="btn btn-submit" >Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>