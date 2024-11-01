<?php

// Arquivo index responsável pela inicialização do sistema
require './vendor/autoload.php'; 
require './rotas.php';

$dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);
if(isset($dados))
{
    echo $dados['nome'].'<hr>';
    echo $dados['senha'].'<hr>';
}

?>

