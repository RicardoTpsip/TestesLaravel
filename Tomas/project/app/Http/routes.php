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

/* Because I'm using a Controller with a method, I don't need the Route no more
 * 
 *  Route::get('/', function () {
        $people = ['Ricardo', 'Tomas', 'Rudi'];

        return view('welcome', compact('people')); //here I'm sending an array as a another parameter
    });

    Route::get('about', function () {
        return view('pages/about'); //resources/views/pages/about.blade.php
    });
 */

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');