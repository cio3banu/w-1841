@extends('layouts')

@section('content')
    

    <h1>Home page</h1>
    @foreach ($grupe as $grupa)
        
    @if ($grupa=="W-1841") {{"Grupa W-1841 este bravo"}}
        
    @else
    <p>Grupa: <strong>{{$grupa}}</strong> </p>
    @endif
    @endforeach
    
    
    <p>Specialitatea: <strong>{{$specialitatea}}</strong> </p>
       
    <ul>
<li><a href="/about">About</a></li>
<li><a href="/contacts">Contacts</a></li>
    </ul>
@endsection