<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produto; // <===========================

class ProdutoController extends Controller
{
    public function listar()
    {
        // Instanciando...
        // $produto = new Produto();
        // $produtos = $produto->getListaDeProdutos();
        
        // Utilizando método estático
        $produtos = Produto::getListaDeProdutos();
        
        return view('ViewProdutoListar', compact('produtos'));
    }
}
