@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    {{-- Products --}}

    <div class="d-flex align-items-center">
        <h1> Products </h1>
        <div class="ml-3 align-middle mb-0">
            {{ $products->render() }}
        </div>
    </div>
    <hr>
    @foreach ($products->chunk(4) as $chunk)
        <div class="row justify-content-center">
            @foreach ($chunk as $key => $product)
                <div class="col col-lg-3">
                    <div class="card shadow border-0 rounded-0">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }}</h6>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ str_limit($product->description, 100) }}</p>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-shopping-cart"></i>&nbsp; Add To Cart</a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
