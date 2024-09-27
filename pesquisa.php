<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ASSETS/CSS/main.css">
    <link rel="stylesheet" href="ASSETS/CSS/pesquisa.css">
    <link rel="stylesheet" href="ASSETS/CSS/input.css">
    <link rel="stylesheet" href="ASSETS/CSS/form-modal.css">
    
</head>

<body>

    <?php
        // if(isset($_POST["search"])){
        //     $search = $_POST["search"];
        // } else{
        //     $search = "";
        // }

        //Se não existir é vazio;
        $busca = $_POST["busca"] ?? "";

        include "script_conexao.php";

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$busca%' ";

        //Resultado da Consulta: Tabela de SQL
        $dados = mysqli_query($conn, $sql);

    ?>

    <!-- Por algum motivo o style do .container não está funcionando no arquivo pesquisa.css -->
    <div class="container" style="width: 80%; margin: 5rem 0px;">
        <header>
            <h1>Pesquisa de Dados</h1>
            <form action = "pesquisa.php" class="input-box" method="POST">
                <input type="search" name="busca" id="busca" placeholder="Nome" autofocus>
                <button type="submit" class="btn btn-search">
                    <img src="ASSETS/IMG/search_icon.svg" alt="" class="search-icon">
                </button>
            </form>
            <a href="index.php" class="btn">Voltar</a>
        </header>
        
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Funcionalidades</th>
                </tr>
            </thead>

            <tbody>
                <?php
                
                    include "script_mostra_data.php";
                    while($linha = mysqli_fetch_assoc($dados)){
                        // Incompatível:$linha_container = "<tr>";
                        // forEach($linha as $key => $value){
                        //     $linha_container += "<td>$value</td>";
                        // }
                        // $linha_container += "</td>";
                        $id = $linha["id_pessoa"];
                        $nome = $linha["nome"];
                        $email = $linha["email"];
                        $tel = $linha["telefone"];
                        $endereco = $linha["endereco"];
                        $data_nascimento = $linha["data_nascimento"];
                        $nome_foto = $linha["foto"];
                        $data_nascimento = mostra_data($data_nascimento);

                        echo 
                        "<tr>
                            <th scope = 'row'>$id</th>
                            <td><img src='./ASSETS/IMG/$nome_foto' width='48'></td>
                            <th>$nome</th>
                            <td>$email</td>
                            <td>$tel</td>
                            <td>$endereco</td>
                            <td>
                                <div class='btn-container'>
                                    <a class='btn' href='cadastro_edit.php?id=$id'>Editar</a>
                                    <button type='button' class='btn btn-remove' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"'. "pegarDados('$id', '$nome')" . '"' . ">
                      Excluir
                    </button>
                                </div>
                            </td>
                        </tr>";
                    }
                ?>
                
            </tbody>
        </table>
    </div>    

<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="confirma" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja Remover o <var id="name"></var>?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
            <form action = "script_remove.php" method = "POST" class="form-modal">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-remove">Remover</button>
                <input type="hidden" class="send-id" value ="" name="id" id="id">
                <input type="hidden" class="send-name" value="" name="nome" id="nome">
            </form>
        </div>
    </div>
  </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function pegarDados(id, nome){
       nameVar = document.querySelector("#name");
       nameVar.innerHTML += nome;
       
       enviarId = document.querySelector(".send-id");
       enviarId.value = id;
       
       enviarNome = document.querySelector(".send-name")
       enviarNome.value = nome;
    }


</script>
</html>