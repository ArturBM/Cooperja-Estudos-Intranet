<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;
use Twig\Template;
use sistema\Modelo\PostModelo;

class SiteControlador extends Controlador
{
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index():void
    {
        $posts = (new PostModelo())->ler();

        echo $this->template->renderizar('index.html',[
            'posts' => $posts
        ]);
    }

    public function post(int $id):void
    {
        echo $id;
    }

    public function sobre():void
    {
        echo $this->template->renderizar('sobre.html',[
            'titulo'=> 'Sobre-nós'
        ]);
    }

    public function erro404():void
    {
        echo $this->template->renderizar('404.html',[
            'titulo'=> 'Página não encontrada'
        ]);
    }
}