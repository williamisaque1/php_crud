<?php

use App\Controller\ProdutoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':

      ProdutoController::index();
  
        break;

   

    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/form/save':
        ProdutoController::save();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}