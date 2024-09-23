<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Informações </title>
    <link rel="stylesheet" href="ASSETS/CSS/main.css">
    <link rel="stylesheet" href="ASSETS/CSS/cadastro.css">
    <link rel="stylesheet" href="ASSETS/CSS/input.css">
</head>

<?php 
    include "script_conexao.php";
    $id = $_GET["id"];

    $sql = "SELECT * FROM pessoas WHERE id_pessoa = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);

?>

<body>
    <div class="container">
        <section>
            <h1>Cadastro das Pessoas</h1>
            <p>Digite seus dados a seguir</p>
        </section>
        <form action="script_edit.php" method="POST">
            <div class="input-row" id="name-box">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" required>
            </div>
            <div class="input-row" id="email-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $linha['email']?>">
            </div>
            <div class="input-row">
                <label for="tel" id="tel-box">Telefone:</label>
                <input type="tel" name="tel" id="tel" value="<?php echo $linha['telefone']?>">
            </div>
            
            <div class="input-row" id="endereco-box">
                <label for="endereco">Endereço: </label>
                <input type="adress" name="endereco" id="endereco" required value="<?php echo $linha['endereco']?>">
            </div>
            <div class="input-row" id="endereco-box">
                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $linha['data_nascimento']?>">
            </div>

            <div class="btn-container">
                <a href="index.php" class="btn btn-return">Voltar</a>
                <button type="submit" class="btn btn-submit" >Salvar Alterações</button>
                <input type="hidden" name="id" id="id" value="<?php echo $id?>">
            </div>
        </form>
    </div>
</body>
</html>