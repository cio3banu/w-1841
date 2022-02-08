@extends('layouts')
@section('title','Home page')

@section('content')
    

    <h1>Home page</h1>
    @foreach ($grupe as $grupa)
        
    @if ($grupa=="W-1841") {{"Grupa W-1841 este bravo"}}
        
    @else
    <p>Grupa: <strong>{{$grupa}}</strong> </p>
    @endif
    @endforeach
    
     <p>Specialitatea: <strong>{{$specialitatea}}</strong> </p>
       
@endsection