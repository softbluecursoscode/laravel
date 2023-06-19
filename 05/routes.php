<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SitePublicoController@paginaPrincipal');
Route::get('/vitrine', 'SitePublicoController@produtos');
Route::get('/info', 'SitePublicoController@informacoes');

Route::get('/parametros', 'ParametrosController@acessandoParametrosViaRequest');
Route::get('/formulario', 'ParametrosController@formularioExibir');
Route::post('/formularioReceber', 'ParametrosController@formularioReceber');





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
