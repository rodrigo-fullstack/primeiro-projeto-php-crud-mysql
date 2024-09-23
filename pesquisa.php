<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Dados</title>
    <link rel="stylesheet" href="ASSETS/CSS/main.css">
    <link rel="stylesheet" href="ASSETS/CSS/pesquisa.css">
    <link rel="stylesheet" href="ASSETS/CSS/input.css">
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
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Funcionalidades</th>
                </tr>
            </thead>

            <tbody>
                <?php
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

                        echo 
                        "<tr>
                            <th scope = 'row'>$id</td>
                            <th>$nome</td>
                            <td>$email</td>
                            <td>$tel</td>
                            <td>$endereco</td>
                            <td>
                                <div class='btn-container'>
                                    <a class='btn' href='cadastro_edit.php?id=$id'>Editar</a>
                                    <a class='btn btn-remove' href='#'>Remover</a>
                                </div>
                            </td>
                        </tr>";
                    }
                ?>
                
            </tbody>
        </table>
    </div>    

</body>
</html>