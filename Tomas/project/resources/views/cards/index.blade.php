@extends('layout')

@section('content')

	<h1> My Cards </h1>

	@foreach($cards as $card)

	<div>
		{{ $card->title }}
	</div>

	@endforeach

@stop