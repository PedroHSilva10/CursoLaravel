@extends('site.layout')
@section('title','Details')
@section('content')

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ $product->image }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Posted by: {{ $product->user->firstName }} <br>
            Categoria: {{ $product->category->name}}
        </p> 
        <button class="btn blue btn-large"> buy </button>
    </div>
</div>  

@endsection