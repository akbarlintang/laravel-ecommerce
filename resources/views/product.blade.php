@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="nav-bread pb-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </div>
    </ol>
</nav>

<div class="container">
    <div class="row py-3 pl-5 pr-5">
        <div class="col-sm">
            <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="Product Image">
        </div>
        <div class="col-sm product-field">
            <h3 class="font-weight-bold">{{ $product->name }}</h3>
            <h5 class="text-secondary">{{ $product->details }}</h5>
            <h4 class="font-weight-bold">{{ $product->presentPrice() }}</h4>

            <p class="pt-3">{{ $product->description }}</p>

            <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">

                <button class="btn button-dark">Add to Cart</button>
            </form>
        </div>
    </div>
</div>

@include('partials.related')

@endsection