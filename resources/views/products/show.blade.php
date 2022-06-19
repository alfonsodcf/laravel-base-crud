@extends('layouts.default')

@section('pageTitle','comic')

@section('mainContent')
    <h1 class="text-center">
        {{$prodotto->title}} 
    </h1>
    <img src="{{$prodotto->image}}" alt="{{$prodotto->title}}">
    <p>
        {{$prodotto->description}} 
    </p>
    
@endsection