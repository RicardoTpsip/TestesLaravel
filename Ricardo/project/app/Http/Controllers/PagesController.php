<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
   
    public function home(){
        
        $pessoas=['Ricardo', 'Tomas', 'Manuel'];
    
        return view('welcome', compact('pessoas'));
    }
    
    public function about(){
        
        return view('pages/sobre_mim');
    }
    
}
