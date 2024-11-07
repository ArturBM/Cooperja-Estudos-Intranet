<?php

namespace sistema\Modelo;
use sistema\Nucleo\Conexao;

class PostModelo
{
    const TABELA= 'posts';

public function busca(?string $termo = null, ?string $ordem = null):array
{
    $termo = ($termo ? "WHERE {$termo}" : '');
    $ordem = ($ordem ? "ORDER BY {$ordem}" : '');

    $query = "SELECT * FROM ". self::TABELA ." {$termo} {$ordem}";
    $stmt = Conexao::getInstancia()->query($query);
    $resultado = $stmt->fetchAll();

    return $resultado;
}

public function buscaPorId(int $id):bool | object
{
    $query = "SELECT * FROM ". self::TABELA ." WHERE id = {$id}";
    $stmt = Conexao::getInstancia()->query($query);
    $resultado = $stmt->fetch();

    return $resultado;
}

public function pesquisa(string $busca):array
{

    $query = "SELECT * FROM ". self::TABELA ." WHERE titulo LIKE '%{$busca}%' ";
    $stmt = Conexao::getInstancia()->query($query);
    $resultado = $stmt->fetchAll();

    return $resultado;
}

public function armazenar(array $dados): void
{
    $query = "INSERT INTO ". self::TABELA ." (categoria_id,titulo, texto, status) VALUES (:categoria_id, :titulo, :texto, :status);";
    $stmt = Conexao::getInstancia()->prepare($query);
    $stmt->execute($dados);
}

public function atualizar(array $dados, int $id): void
{
    $query = "UPDATE ". self::TABELA ." SET categoria_id = :categoria_id, titulo = :titulo,
     texto = :texto, status = :status WHERE id = {$id};";
    $stmt = Conexao::getInstancia()->prepare($query);
    $stmt->execute($dados);
}

public function deletar(int $id): void
{
    $query = "DELETE FROM ". self::TABELA ." WHERE id = {$id}";
    $stmt = Conexao::getInstancia()->prepare($query);
    $stmt->execute();
}

public function total(?string $termo = null):int
{
    $termo = ($termo ? "WHERE {$termo}" : '');

    $query = "SELECT * FROM ". self::TABELA ." {$termo}";
    $stmt = Conexao::getInstancia()->prepare($query);
    $stmt->execute();

    return $stmt->rowCount();
}


}