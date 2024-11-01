<?php

namespace sistema\Controlador\Admin;

use sistema\Modelo\PostModelo;

class AdminPosts extends AdminControlador
{

    public function listar():void
    {
        echo $this->template->renderizar('posts/listar.html',[
            'posts'=> (new PostModelo())->busca(),
        ]);
    }

    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            
        }
        echo $this->template->renderizar('posts/formulario.html',[]);
    }

}