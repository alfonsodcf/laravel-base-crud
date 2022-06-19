@extends('layouts.default')

@section('pageTitle','comics')

@section('mainContent')
    <h1 class="text-center">
        Comics 
    </h1>
    
    <div class="container">
        <div class="row">
            @foreach ($prodotti as $prodotto)
            <div class="card col-5" style="width: 18rem;">
                <img src="{{$prodotto->image}}" class="card-img-top" alt="{{$prodotto->title}}">
            
                <div class="card-body">
                    <h5 class="card-title">{{$prodotto->title}}</h5>
                    <p class="card-text">{{$prodotto->type}}</p>
                    <p class="card-text">{{$prodotto->price}}</p>
                    <p class="card-text">{{$prodotto->series}}</p>
                    <a href="{{route('products.show',$prodotto->id)}}" class="btn btn-info">Visualizza</a>
                    <a href="{{route('products.edit',$prodotto->id)}}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('products.destroy',$prodotto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                    
                </div>
            </div>
        @endforeach

        </div>

    </div>
       
        
@endsection