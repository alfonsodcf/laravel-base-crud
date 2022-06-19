@extends('layouts.default')

@section('pageTitle','Nuovo comic')

@section('mainContent')
    <h1 class="text-center">
        Modifica comic
    </h1>
    <form action="{{route('products.update',$product->id)}}" method="post" class="container"> {{-- per inviare dati al server --}}
        @csrf  {{-- deve esere in ogni form per una questione di saibersechiuriti--}}
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$product->title}}">
        </div>  
        
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$product->description}}</textarea>
        </div>
        <div class="mb-3 form-check">
         
          <label class="form-label" for="type">Select type:</label>
          <select name="type" nome="type" id="type">
            <option value="comic book" {{$product->type == 'comic book' ? 'selected' : ''}}>comic book</option>
            <option value="graphic novel" {{$product->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
          </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">series</label>
            <input type="text" class="form-control" id="series" aria-describedby="series" name="series" value="{{$product->series}}">
        </div>  

        <div class="mb-3">
          <label for="image" class="form-label">image url</label>
          <input type="text" class="form-control" id="image" aria-describedby="image" name="image" value="{{$product->image}}">
        </div>
        
   

        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="number" class="form-control" id="price" aria-describedby="price" name="price" value="{{$product->price}}" min="1.00" max="99.99">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" value="{{$product->sale_date}}">
          </div>
        
        

        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
    
@endsection