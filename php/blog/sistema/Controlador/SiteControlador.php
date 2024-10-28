<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;
use Twig\Template;

class SiteControlador extends Controlador
{
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index():void
    {
        echo $this->template->renderizar('index.html',[
            'titulo'=> 'teste de titulo',
            'subtitulo' => 'teste de subtitulo'
        ]);
    }

    public function sobre():void
    {
        echo $this->template->renderizar('sobre.html',[
            'titulo'=> 'Site Sobre-nós',
            'subtitulo' => 'Quem somos ?'
        ]);
    }
}