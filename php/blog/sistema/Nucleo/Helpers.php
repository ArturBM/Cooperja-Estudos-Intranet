<?php

namespace sistema\Nucleo;

class Helpers
{
    

    public static function validarCpf(string $cpf): bool
    {
        $cpf = self::limparNumero($cpf);
        if(mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)){
            return false;
        }
        return true;

        for($t=9;$t < 11; $t++)
{
    for($d = 0, $c = 0; $c < $t; $c++){
        $d += $cpf[$c] * (($t + 1) - $c);
    }
    $d = ((10 * $d) % 11) % 10;
    if($cpf[$c] != $d) 
    {
        return false;
    }
}

    }

    public static function limparNumero(string $numero): string
    {
        return preg_replace('/[^0-9]/', '',$numero);
    }

  public static function slug(string $string): string
{
    // Remove acentuação
    $string = preg_replace('/[áàãâä]/u', 'a', $string);
    $string = preg_replace('/[éèêë]/u', 'e', $string);
    $string = preg_replace('/[íìîï]/u', 'i', $string);
    $string = preg_replace('/[óòõôö]/u', 'o', $string);
    $string = preg_replace('/[úùûü]/u', 'u', $string);
    $string = preg_replace('/[ç]/u', 'c', $string);

    // Converte para minúsculas
    $string = strtolower($string);

    // Remove caracteres especiais, mantendo letras, números e espaços
    $string = preg_replace('/[^a-z0-9\s-]/', '', $string);

    // Substitui espaços por hífens
    $string = preg_replace('/[\s-]+/', '-', $string);

    // Remove hífens no início e no fim
    $string = trim($string, '-');

    return $string;
}
/**
 * Função: dataAtual
 *
 * Retorna a data atual formatada por extenso, incluindo o dia da semana, dia do mês, mês e ano.
 *
 * @return string A data formatada.
 */

    public static function dataAtual():string
    {
        $diaMes= date('d');
        $diaSemana= date('w');
        $mes= date('n') - 1;
        $ano = date('Y');

        $NomeDiasDaSemana = ['Domingo', 'Segunda-Feira', 'Terça-Feira','Quarta-Feira','Quinta-Feira',
        'Quinta-Feira','Sexta-Feira','Sabádo'];

        $nomeDosMeses = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];

        $dataFormatada = $NomeDiasDaSemana[$diaSemana].',
        '.$diaMes.' de '.$nomeDosMeses[$mes].' de '.$ano;

        return $dataFormatada;
    } 

/**
 * Função: url
 *
 * Gera uma URL completa com base no ambiente atual (desenvolvimento ou produção).
 *
 * @param string $url A URL parcial a ser processada.
 * @return string A URL completa gerada.
 */   

    public static function url(string $url): string
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

        if(str_starts_with($url, '/'))
    {
    return $ambiente.$url;
    }
        return $ambiente.'/'.$url;
    }

/**
 * Função: localhost
 *
 * Verifica se o servidor atual é 'localhost'.
 *
 * @return bool true se for localhost, false caso contrário.
 */

    public static function localhost():bool
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

        if($servidor =='localhost')
        {
            return true;
        }
        return false;
    }


/**
 * Função: validarUrl
 *
 * Verifica se uma URL é válida.
 *
 * @param string $url A URL a ser validada.
 * @return bool true se válida, false caso contrário.
 */

public static function validarUrl(string $url): bool{
    if(mb_strlen($url) < 10)
    {
        return false;
    }
    if(!str_contains($url,'.'))
    {
        return false;
    }  
    if(str_contains($url,'http://') or str_contains($url,'https://')){
        return true;
    }

    return false;
}

/**
 * Função: validarUrlComFiltro
 *
 * Verifica se uma URL é válida.
 *
 * @param string $url A URL a ser validada.
 * @return bool true se válida, false caso contrário.
 */

    public static function validarUrlComFiltro(string $url): bool{
        return filter_var($url, FILTER_VALIDATE_URL);
    }
  
/**
 * Função: validarEmail
 *
 * Verifica se um e-mail é válido.
 *
 * @param string $email O e-mail a ser validado.
 * @return bool Retorna true se válido, false caso contrário.
 *
 * Exemplo:
 * validarEmail("exemplo@dominio.com");
 */

    public static function validarEmail(string $email):bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

/**
 * Calcula o tempo decorrido desde uma data específica até agora.
 *
 * @param string $data A data a ser comparada (formato aceito pelo strtotime).
 * @return string Descrição do tempo decorrido, como:
 * - "agora" (menos de 60 segundos)
 * - "há X minutos"
 * - "há X horas"
 * - "há X dias"
 * - "há X semanas"
 * - "há X meses"
 * - "há X anos"
 *
 * Exemplo:
 * echo contarTempo('2023-10-01 12:00:00');
 */

    public static function contarTempo(string $data)
    {
       $agora = strtotime(date('Y-m-d H:i:s'));
       $tempo = strtotime($data);
       $diferenca = $agora - $tempo;
        
       $segundos = $diferenca;
       $minutos = round($diferenca / 60);
       $horas = round($diferenca / 3600);
       $dias = round($diferenca/86400);
       $semanas = round($diferenca / 604800);
       $meses = round($diferenca / 2419200);
       $anos =round($diferenca /29030400);
       if($segundos <=60)
       {
        return 'agora';
       }
       elseif($minutos <=60)
       {
        return $minutos ==1 ? ' há 1 minutos': 'há '.$minutos.'minutos';
       }
       elseif($horas <= 24)
       {
        return $horas ==1 ? 'há 1 hora': 'há '.$horas.'horas';
       }
       elseif($dias <= 7)
       {
        return $dias ==1? 'há 1 dia': 'há '.$dias.' dias';
       }
       elseif($semanas <= 4)
       {
        return $semanas ==1? 'há 1 semana': 'há '.$semanas.' semanas';
       }
       elseif($meses <= 12)
       {
        return $meses ==1? 'há 1 mês': 'há '.$meses.' meses';
       }
       else{
        return $anos ==1? 'há 1 ano': 'há '.$anos.' anos';
       }
      
    }
    
/**
 * Formatar um valor com ponto e virgula
 * @param float $valor
 * @return string
 */

public static function formatarValor(float $valor = null): string{
    return number_format(($valor ? $valor : 0),2,',','.');
}

/**
 * Formata um número com pontos
 * @param int $numero
 * @return string
 */

public static function formatarNumero(string $numero = null):string{
    return number_format($numero ? $numero: 0, 0, '.','.');
}

public static function saudacaoComMatch():string
{
     $hora = date('H');
   
    $saudacao = match (true)
    {
        $hora >= 0 and $hora <=5 => 'Boa Madrugada',
        $hora >= 6 && $hora <= 12 => 'Bom Dia',
        $hora >=13 and $hora <=18 => 'Boa Tarde',
        default => 'Boa Noite'
    };

    return $saudacao;
}

public static function saudacaoComSwitch():string
{
     $hora = date('H');
   
     switch($hora){
        case $hora >= 0 && $hora <= 5: $saudacao = 'boa madrugada';
        break;
        case $hora >= 6 && $hora <= 12: $saudacao = 'bom dia';
        break;
        case $hora >=13 and $hora <=18: $saudacao = 'boa tarde';
        break;
        default: $saudacao = 'boa noite';
     }

    return $saudacao;
}

public static function saudacao():string
{
     $hora = date('H');
   

    if($hora >= 0 && $hora <= 5)
    {
        $saudacao = 'boa madrugada';
    }
    elseif($hora >= 6 && $hora <= 12)
    {
        $saudacao = 'bom dia';
    }
    elseif($hora >=13 and $hora <=18){
        $saudacao = 'boa tarde';
    }
    else{
        $saudacao = 'boa noite';
    }

    return $saudacao;
}

/**
 * Resume um texto
 * 
 * @param string $texto -> texto para resumir
 * @param int $limite -> Quantidade de caracteres
 * @param string $continue(opcional) -> Oque vem após do resumo
 * @return string texto resumido
 */

public static function resumirTexto(string $texto,int $limite, $continue = '...'):string
{
    $textoLimpo= trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite)
    {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo,0,mb_strrpos(mb_substr($textoLimpo,0,$limite), ''));

    return $resumirTexto.$continue;
}
}