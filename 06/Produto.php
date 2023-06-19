<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// php artisan make:model Produto

class Produto extends Model
{
    public static function getListaDeProdutos()
    {
        return array("Php", "Java", "C++", "iOS", "Android");
    }
}
