<?php

namespace App\Controller;


use App\Model\ProdutoModel;


class ProdutoController extends Controller
{


 
    public static function index()
    {    
          
        $model = new ProdutoModel(); 
       
        $model->getAllRows(); 

        parent::render('Produto/ListaProduto', $model);
    }


  
    public static function form()
    {
        $model = new ProdutoModel();
        $_GET['id'] = '1'; 
        if(isset($_GET['id'])) 
         
        $model = $model->getById( (int) $_GET['id']); 
           
        parent::render('Produto/FormProduto', $model);
    }


    public static function save()
    {

       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cpf = $_POST['cpf'];
       $model->data_nascimento = $_POST['data_nascimento'];

       $model->save(); 
       header("Location: /"); 
    }


  
    public static function delete()
    {
        $model = new ProdutoModel();
       
        $model->delete( (int) $_GET['id'] ); 

        header("Location: /"); 
    }
}