@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($cartProducts as $product)
                <div class="col-12">
                    <div class="card shadow border-0 rounded-0">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }}</h6>
                            <h5 class="card-title">
                                <a href="{{ route('show', $product->id) }}"> {{ $product->name }} </a>
                            </h5>
                            <p class="card-text">{{ str_limit($product->description, 100) }}</p>
                            <a href="{{ route('remove-to-cart', $product->id) }}" class="btn btn-danger btn-sm"
                                    onclick="event.preventDefault();
                                    document.getElementById('remove-to-cart-' + {{ $product->id }}).submit();">
                                <i class="fas fa-trash"></i>&nbsp; Remove To Cart
                            </a>
                            <form action="{{ route('remove-to-cart', $product->id) }}" method="post" id="remove-to-cart-{{ $product->id }}" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
