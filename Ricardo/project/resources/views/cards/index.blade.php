@extends('layout')


@section('content')
<h1>Todas as cartas</h1>

@foreach($cards as $card)
<div>
    {{$card->title}}
    
    
</div>

@endforeach

@stop

