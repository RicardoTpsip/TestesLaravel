<?php

namespace App\Http\Controllers;

/* I'm not using the Request Object any time soon...
 * use Illuminate\Http\Request;
 * use App\Http\Requests;
 */

class PagesController extends Controller
{
    
    //this method is the same thing as the Route::get(...){...}
    // Home Page
    public function home(){
        $people = ['Ricardo', 'Tomas', 'Rudi'];

        return view('welcome', compact('people')); //here I'm sending an array as a another parameter
    }
    
    //About Page
    public function about(){
        return view('about'); //resources/views/pages/about.blade.php
    }
    
}