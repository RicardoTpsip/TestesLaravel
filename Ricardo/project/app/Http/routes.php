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
Route::get('/', function () {
    return view('welcome');
});


//Route personalizada
Route::get('sobre_mim', function(){
   return view('pages/sobre_mim');
});