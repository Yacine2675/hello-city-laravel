@extends('app')

@section('title')
Hello City
@endsection

@section('content')
    
   
        <h1>Hello from Paris!</h1>

        <p>It's currently {{ date('h:i A')}}.</p>
        @section('lien')
        <a href="/about-us">About Us</a>
        @endsection
@endsection
