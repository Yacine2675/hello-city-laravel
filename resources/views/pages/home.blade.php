@extends('app')

@section('title', config('app.name'))


@section('content')
    
   
        <h1>Hello from Paris!</h1>

        <p>It's currently {{ date('h:i A')}}.</p>
        
@endsection
