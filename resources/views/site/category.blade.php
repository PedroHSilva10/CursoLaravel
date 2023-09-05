@extends('site.layout')
@section('title','This is the home page')
@section('content')
<div class="row container">

    <h3>Category</h3>
    @foreach ($products as $product)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $product->image }}">
                    
                    <a href="{{ route('site.details',$product->slug)}}" btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">{{ Str::limit($product->name,30) }}</span>
                    <p>{{ Str::limit($product->description,50) }}</p>
                </div>
            </div>
        </div>
    @endforeach
    

</div>

<div class="row center "> 
    {{$products->links('custom.pagination')}}
</div>
@endsection

