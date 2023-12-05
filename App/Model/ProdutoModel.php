<?php

namespace App\Model;

use App\DAO\ProdutoDAO;


class ProdutoModel extends Model
{

    public $id, $name,$quantidade ,$descricao,$preco ,$date_create ,$hour_create ;
    

  
    public function save()
    {
 
        $dao = new ProdutoDAO(); 

        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); // Como existe um id, passando o model para ser atualizado.
        }        
    }


    public function getAllRows()
    {      
        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
    }



    public function getById(int $id)
    {
        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id); 

        return ($obj) ? $obj : new ProdutoModel(); 
    }


    /**
     * Método que encapsula o acesso a DAO do método delete.
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * que será excluido da tabela no MySQL, via camada DAO.
     */
    public function delete(int $id)
    {
        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}