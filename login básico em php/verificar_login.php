<?php


$nome = $_GET['nome'];
$senha = $_GET['senha'];

if ($nome != 'julio' && $senha != '123456') {
    header('location: /');
    exit;
}


echo 'logado com sucesso!';


?>
