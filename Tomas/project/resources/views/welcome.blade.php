@extends('layout')

@section('content')

    <h1>The Welcome Page Goes Here</h1>

    <!-- Using blade engine for authenticate data -->
    
    @if(empty($people))
        There are no people.
    @else
        Something else here.
    @endif
    
    <!-- Another note -->
    <!-- unless is = to if(!variable) -->
    
    @unless(empty($people))
        There are some people.
    @endunless
    
    <!-- Using blade engine for output data -->
    
    @foreach($people as $person)
    
        <li>{{ $person }}</li>
        
    @endforeach

@stop