<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//"php artisan make:controller ParametrosController"

class ParametrosController extends Controller
{   
    public function acessandoParametrosViaRequest(Request $request)
    {
        $produtos = array("Php", "Java", "C", "iOS", "Android");
        
        //if(isset($request->prodId))
        if($request->has('prodId'))
        {
            // $prodId = $request['prodId'];
            $prodId = $request->prodId;
            $buffer = "Curso selecionado: " . $produtos[$prodId];
        }
        else
        {
            $buffer = "Nenhum curso selecionado";
        }
        
        return view('ViewAcessandoParametros', compact('buffer'));
    }
    
    public function formularioExibir()
    {
        return view('ViewFormularioExibir');
    }
    
    public function formularioReceber(Request $request)
    {
        $buffer = "Via post: ";
        
        if(isset($request->nomeUsuario))
        {
            $buffer .= $request->nomeUsuario;
        }
        
        return view('ViewFormularioReceber', compact('buffer'));
    }
}
