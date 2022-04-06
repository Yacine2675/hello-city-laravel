@extends('app')

@section('title', 'About Us | ' . config('app.name'))



@section('content')

        <img src="{{ asset('images/psg.png') }}" alt="Paris Saint Germain" class="my-12 rounded-full shadow-md">
    

        <h2 class="text-gray-700 mb-5">Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.</h2>

        <p ><a href="/" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>

        
    
@endsection 