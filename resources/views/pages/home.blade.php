@extends('app')

@section('title', config('app.name'))


@section('content')
    <img src="images/paris-flag.png" alt="Paris Flag" width="300">
    
   
        <h1>Hello from Paris!</h1>

        <p>It's currently {{ date('h:i A')}}.</p>
        
@endsection
