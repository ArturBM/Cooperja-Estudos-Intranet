<?php

// Arquivo index responsável pela inicialização do sistema

use sistema\Nucleo\Sessao;

require './vendor/autoload.php'; 
// require './rotas.php';

$sessao = new sistema\Nucleo\Sessao();

//$sessao ->criar('nome', 'Artur Machado');

var_dump($sessao->carregar());
echo '<hr>';
var_dump($sessao->checar('nome'));
echo '<hr>';
$sessao->limpar('visitas');
// var_dump($sessao->checar('usuario'));
echo '<hr>';
 $sessao->deletar();
?>

