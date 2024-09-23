<?php
  include "script_conexao.php";
  
  $id = $_POST("id");
  $nome = $_POST("nome");
  $email = $_POST("email");
  $telefone = $_POST("tel");
  $endereco = $_POST("endereco");
  $data_nascimento = $_POST("data_nascimento");
  
  $sql = "UPDATE ˋpessoasˋ set `nome` = '$nome', `email` = '$email', `telefone` = '$telefone', `endereco` = '$endereco', `data_nascimento` = '$data_nascimento' WHERE id_pessoa = '$id'";
  
    mysqli_query($conn, $sql);
  
    echo "$id, $nome, $email, $telefone, $endereco, $data_nascimento";
  
  
?>

