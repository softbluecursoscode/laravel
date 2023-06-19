<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//"php artisan make:controller SitePublicoController"

class SitePublicoController extends Controller
{
	public function paginaPrincipal()
	{
		return view('ViewPrincipal');
	}
    
	public function produtos()
	{
		return view('ViewProdutos');
	}
    
	public function informacoes()
	{
		return view('ViewInformacoes');
	}
}
