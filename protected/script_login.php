<?php 

$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == 'admin' && $senha == 'admin'){
    echo "Entrou no sistema";

} else{
    echo "Não entrou no sistema";
}

?>