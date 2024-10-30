<?php

namespace sistema\Modelo;
use sistema\Nucleo\Conexao;

class CategoriaModelo
{

public function busca():array
{

    $query = "SELECT * FROM categorias";
    $stmt = Conexao::getInstancia()->query($query);
    $resultado = $stmt->fetchAll();

    return $resultado;
}

public function buscaPorId(int $id):bool | object
{
    $query = "SELECT * FROM categorias WHERE id = {$id}";
    $stmt = Conexao::getInstancia()->query($query);
    $resultado = $stmt->fetch();

    return $resultado;
}

}