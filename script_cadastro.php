
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Script</title>
    <link rel="stylesheet" href="ASSETS/CSS/main.css">
    <link rel="stylesheet" href="ASSETS/CSS/messages.css">
</head>
<body>
    <div class="container">
        <?php
            include "messages.php";
            include "script_conexao.php";
            include "trabalhando_fotos.php";

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $endereco = $_POST["endereco"];
            $data_nascimento = $_POST["data_nascimento"];
            $foto = $_FILES["file"];
            $nome_foto = mover_foto($foto);
            // echo "Pessoa Criada: <br>
            //     Nome = $name; email = $email; telefone = $tel; endereço = $endereco;
            // "    

            $sql = "";
            if($nome_foto != -1){
                $sql = "INSERT INTO `pessoas`(`nome`, `email`, `telefone`, `endereco`, `data_nascimento`, `foto`) VALUES ('$nome','$email','$tel','$endereco', '$data_nascimento', '$nome_foto')";
                
                if(mysqli_query($conn, $sql)){
                    mensagem("$nome Cadastrado com sucesso!", "success");  
                } else{
                    mensagem("$nome NÃO foi cadastrado", "error");
                };

            } else{
                mensagem("Você não foi cadastrado pois tentou colocar arquivos maliciosos no sistema.", "error");
            }



        ?>    

        <div class="btn-container">
            <a href="cadastro.php" class="btn btn-return">Voltar</a>
        </div>
    </div>
</body>
</html>
