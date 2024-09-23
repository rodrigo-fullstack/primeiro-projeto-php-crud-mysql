<?php

$server = "localhost";
$user = "root";
$senha = "";
$banco = "empresa_php";

$conn = mysqli_connect($server, $user, $senha, $banco );


// if(function_exists("mensagem")){
//     if($conn = mysqli_connect( $server, $user, $senha, $banco )){
//         mensagem("Conexão bem-sucedida!", "success");
//     }
//     else{
//         mensagem("Erro na Conexão.", "error");

//     }
// }
// else{
//     $conn = mysqli_connect($server, $user, $senha, $banco );
// }
?>