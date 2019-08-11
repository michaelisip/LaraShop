@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $product->name }} </h1>
        <p> {{ $product->price }} </p>
        <p> {{ $product->description }} </p>
        <a href="{{ route('add-to-cart', $product->id) }}" class="btn btn-primary"
            onclick="event.preventDefault();
            document.getElementById('add-to-cart').submit();"> Add To Cart </a>
        <form action="{{ route('add-to-cart', $product->id) }}" method="post" id="add-to-cart" class="d-none">
            @csrf
        </form>

    </div>
@endsection
