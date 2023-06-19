<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Http\Request;

class Produto extends Model
{
    //public static function cadastrar(Request $request)
    
    public static function cadastrar($descricao, $valor)
    {
        if(isset($descricao) == FALSE || strlen($descricao) < 5)
        {
            return "Descrição inválida";
        }
        else if(isset($valor) == FALSE || filter_var($valor, FILTER_VALIDATE_FLOAT) == FALSE)
        {
            return "Valor inválido";
        }
        else
        {
            // Gravação no seu banco de dados...
            // Utilizar outros serviços / recursos...
            
            return "Sucesso";
        }
    }
}
