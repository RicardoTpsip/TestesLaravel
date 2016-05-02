<?php

namespace App\Http\Controllers;

/*
	Not Working...
use App\Card;
*/
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CardsController extends Controller
{
	public function index()
	{
		$cards = DB::table('Cards')->get();

		return view('cards.index', compact('cards'));
	}

	public function show(Card $card)
	{
		$card = DB::table('Cards')->find($id);

		return view('cards.show', compact('card')); 
	}
}
 