<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//Nos routes ao retornar uma view o caminho da pasta é 
//resources/views e o nome do ficheiro com extensão .blade.php
//podemos  retornar uma string que o blade converte em html
//As routes têm sempre um retorno


//transferi a função para PagesController.php
/*Route::get('/', function () {
    
    //criação do array depois podemos retorna-lo de varias formas usei o compact para o efeito
    
    $pessoas=['Ricardo', 'Tomas', 'Manuel'];
    
    return view('welcome', compact('pessoas'));
}); */


//Route personalizada
/*Route::get('sobre_mim', function(){
   return view('pages/sobre_mim');
}); */

//Rota para um controller
/*Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about'); */

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');