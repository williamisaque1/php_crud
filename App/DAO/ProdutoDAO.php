<?php

namespace App\DAO;

use App\Model\ProdutoModel;
use \PDO;


class ProdutoDAO extends DAO
{
 
    public function __construct()
    {
    
        parent::__construct();       
    }



    public function insert(ProdutoModel $model)
    {
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare
        $sql = "INSERT INTO produtos (`name`, quantidade, descricao,preco,date_create,hour_create) VALUES (?, ?, ?) ";
      
        // Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
      
        $stmt = $this->conexao->prepare($sql);


        // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.
        $stmt->bindValue(1, $model->name);
        $stmt->bindValue(2, $model->quantidade);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->preco);
        $stmt->bindValue(5, $model->date_create);
        $stmt->bindValue(6, $model->hour_create);


        $stmt->execute();
    }



    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produtos SET `name=?`, quantidade=?, descricao=?,preco=?,date_create=?,hour_create=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id);
        $stmt->bindValue(2, $model->name);
        $stmt->bindValue(3, $model->quantidade);
        $stmt->bindValue(4, $model->descricao);
        $stmt->bindValue(5, $model->preco);
        $stmt->bindValue(6, $model->date_create);
        $stmt->bindValue(7, $model->date_hour);
     
        $stmt->execute();
    }



    public function select()
    {
        $sql = "SELECT * FROM produtos";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    public function selectById(int $id)
    {
        $sql = "SELECT * FROM produtos WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\ProdutoModel"); // Retornando um objeto específico ProdutoModel
    }



    public function delete(int $id)
    {
        $sql = "DELETE FROM produtos WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}