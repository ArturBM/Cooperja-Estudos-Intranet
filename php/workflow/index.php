<?php
//declare(strict_types=1) para deixar fortimente tipada
require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = 'texto para resumir';
/*
echo $total = mb_strlen(trim($texto));
echo '<hr>';
echo $resumo = mb_substr($texto,1,3); //resumi o texto entre os indices informados
echo '<hr>';

echo $ocorrencia = mb_strrpos($texto, 'x'); //mostra a ultima ocorrencia da letra
*/

// $string = 'texto';
// $int = 10;
// $float = 9.99;
// $bool = true;
// $nulo = null;

// var_dump($string); // verificar o tipo da variavel
// echo '<hr>';
// echo saudacao();
// echo '<hr>';
 echo resumirTexto($texto,15);

 //Operador ternario
echo '<hr>';
echo ($valor ? $valor : 0); //condicional ternaria, só usar em coisas simples
echo '<hr>';
echo $valor ?:0; // outro jeito que diz a mesma coisa, leitura mais dificil

//Array 
// $meses = array();
$meses = ['Janeiro'];
var_dump($meses);

// $meses = array();
$meses = [ 'j'=>'Janeiro', 'Fevereiro', 'Março'];

foreach($meses as $chave) {
    echo $chave.'<br>';
}

echo '<hr>';
echo $meses['j'];
echo '<hr>';
var_dump($meses);

echo '<hr>';
var_dump($_SERVER);

//slug
echo slug("Adão Negro - '2022' ").'<hr>';
echo slug("Avatar 2: O caminho da Água ").'<hr>';
echo slug("Não! Não Olhe! ").'<hr>';
echo slug("Sonic 2 - O Filme").'<hr>';
echo slug("NOVA SÉRIE NO DISNEY+!").'<hr>';
echo slug("100 Melhores Filmes").'<hr>';
echo slug("teste!@###$%6%%,*.:/?\|,").'<hr>';

// while
 while($numero <= 10) {
     echo $numero++;
 }

 //for
for($i = 1; $i <= 10; $i++)
 {
     echo ($i % 2 == 0 ? $i.' par' : $i.' impar').'<br>';
 }

 for($i = 1; $i <= 10; $i++)
 {
    echo $i.' x '.$numero.' = '.$i*$numero.'<br>';
 }

 //CHAMAR CLASSE

$msg = new Mensagem();

echo $msg -> informa('Mensagem de sucesso')->renderizar();
echo'<hr>';