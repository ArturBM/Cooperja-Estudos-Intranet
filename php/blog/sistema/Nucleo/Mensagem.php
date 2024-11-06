<?php

    namespace sistema\Nucleo;

/**
 * Classe Mensagem - responsável por exibir as mensagens do sistema.
 * @author Artur Machado <arturbm05@gmail.com>
 * @copyright Copyright (c) 2024, Artur 
 */

class Mensagem 
{
    private $texto;
    private $css;

    public function __toString()
    {
        return $this->renderizar();
    }

/**
 * Define uma mensagem de sucesso.
 *
 * @param string $mensagem A mensagem de sucesso a ser filtrada e armazenada.
 * @return Mensagem A instância atual para encadeamento.
 */
public function sucesso(string $mensagem): Mensagem
{
    $this->css = 'alert alert-success';
    $this->texto = $this->filtrar($mensagem);
    return $this;
}

/**
 * Define uma mensagem de erro.
 *
 * @param string $mensagem A mensagem de erro a ser filtrada e armazenada.
 * @return Mensagem A instância atual para encadeamento.
 */
public function erro(string $mensagem): Mensagem
{
    $this->css = 'alert alert-danger';
    $this->texto = $this->filtrar($mensagem);
    return $this;
}

/**
 * Define uma mensagem de alerta.
 *
 * @param string $mensagem A mensagem de alerta a ser filtrada e armazenada.
 * @return Mensagem A instância atual para encadeamento.
 */
public function alerta(string $mensagem): Mensagem
{
    $this->css = 'alert alert-warning';
    $this->texto = $this->filtrar($mensagem);
    return $this;
}

/**
 * Define uma mensagem informativa.
 *
 * @param string $mensagem A mensagem informativa a ser filtrada e armazenada.
 * @return Mensagem A instância atual para encadeamento.
 */
public function informa(string $mensagem): Mensagem
{
    $this->css = 'alert alert-primary';
    $this->texto = $this->filtrar($mensagem);
    return $this;
}

/**
 * Função: renderizar
 *
 * Filtra e retorna uma mensagem de teste.
 *
 * @return string A mensagem filtrada.
 */

    public function renderizar():string
    {
       return "<div class='{$this->css}'>{$this->texto}</div>";
    }

/**
 * Função: filtrar
 *
 * Remove caracteres especiais de uma string.
 *
 * @param string $mensagem A mensagem a ser filtrada.
 * @return string A mensagem filtrada.
 */

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function flash():void
    {
        (new Sessao())->criar('flash',$this);
    }

}