<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produto;

class ProdutoController extends Controller
{
    public function cadastroAbrir()
    {
        return view('ViewProdutoCadastro');
    }
    
    public function cadastroProcessar(Request $request)
    {
        $resultado = Produto::cadastrar($request->prodDescricao, $request->prodValor);
        
        if($resultado == "Sucesso")
        {
            return view('ViewProdutoSucesso');
        }
        else
        {
            return view('ViewProdutoCadastro', compact('resultado', 'request'));
        }
    }
}
