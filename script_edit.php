
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
			$email = $_POST["email"];
			$telefone = $_POST["tel"];
			$endereco = $_POST["endereco"];
			$data_nascimento = $_POST["data_nascimento"];
			$coluna_foto = $_FILES['foto'];

			//Se estiver vazio no input file:
			if($coluna_foto["error"]){
				//Capturar nome da imagem do bd e enviar novamente para o BD
				$coluna_foto = $_POST['foto-antiga'];

			} else{ //Se não estiver vazio:
				//Capturar novo nome
				$coluna_foto = mover_foto($_FILES['foto']);
				
				//Exclui a foto antiga
				$foto_antiga = $_POST['foto-antiga'];
				excluir_foto($foto_antiga);
			}
			
			// Atualizando no BD
			$sql = "UPDATE pessoas set nome = '$nome', email = '$email', telefone = '$telefone', endereco = '$endereco', data_nascimento = '$data_nascimento', foto = '$coluna_foto' WHERE id_pessoa = '$id'";
			
			if(mysqli_query($conn, $sql)){
				mensagem("$nome ALTERADO com Sucesso!", "success");
			} else{
				mensagem("$nome NÃO foi alterado!","error");
			};
		
      
  ?>

        <div class="btn-container">
            <a href="pesquisa.php" class="btn btn-return">Voltar</a>
        </div>
    </div>
</body>
</html>




