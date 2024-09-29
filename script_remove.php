
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
            include "script_conexao.php";
            include "trabalhando_fotos.php";
            include "messages.php";
            
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            
            $sql = "SELECT foto FROM pessoas WHERE id_pessoa = $id";

            if($dados = mysqli_query($conn, $sql)){
                $coluna_foto = mysqli_fetch_assoc($dados);
                $nome_foto = $coluna_foto['foto'];
                if(isset($nome_foto)){
                    excluir_foto($nome_foto);
                    mensagem('Excluída foto da base de dados', "success");
                }
            }

            $sql = "DELETE from pessoas WHERE id_pessoa = '$id'";
            
            if ( mysqli_query($conn, $sql) ){
                mensagem("$nome DELETADO com Sucesso!", "success");         
            } else{
                mensagem("$nome NÃO foi deletado", "error");
            };
        ?>

        <div class="btn-container">
            <a href="pesquisa.php" class="btn btn-return">Voltar</a>
        </div>
    </div>
</body>
</html>






