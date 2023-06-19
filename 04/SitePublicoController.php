<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitePublicoController extends Controller
{
	public function paginaPrincipal()
	{
		$usuario = "André";
		
		return view('ViewPrincipal')->with('usuario', $usuario);
	}
    
    // Passando um array
	public function produtos()
	{
		$produtos = array("TV", "Celular", "Computador", "Fogão");
		
		return view('ViewProdutos')->with('produtos', $produtos);
	}
    
    // Passando múltiplos valores
	public function informacoes()
	{
        $usuario = "André";
		$produtos = array("TV", "Celular", "Computador", "Fogão");

		return view('ViewInformacoes', compact('usuario', 'produtos'));
	}
}
