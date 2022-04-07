@extends('layouts/app', ['title' => config('app.name')])




@section('content')
    <img src="{{ asset('images/paris-flag.png') }}" alt="Paris Flag" width="300" class="rounded shadow-md mt-12">
    
   
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Paris!</h1>

        <p class="text-lg text-gray-800">It's currently {{ date('h:i A')}}.</p>
        
@endsection
