@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="py-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </div>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3 pb-5">
            <div class="container">
                <h4 class="font-weight-bold pb-3">Sort</h4>
                <h5 class="font-weight-bold">By Category</h5>
                <div class="container">
                    <h6><a href="#">Laptops</a></h6>
                    <h6><a href="#">Desktops</a></h6>
                    <h6><a href="#">Smartphones</a></h6>
                    <h6><a href="#">Tablets</a></h6>
                    <h6><a href="#">TVs</a></h6>
                    <h6><a href="#">Digital Cameras</a></h6>
                </div>

                <h5 class="font-weight-bold pt-3">By Price</h5>
                <div class="container">
                    <h6><a href="#">< Rp 3.000.000</a></h6>
                    <h6><a href="#">Rp 3.000.000 - Rp 8.000.000</a></h6>
                    <h6><a href="#">> Rp 8.000.000</a></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="container">
                <h3 class="font-weight-bold pb-5">Laptops</h3>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-4 text-center pb-5">
                            <div class="card">
                                <a href="{{ route('shop.show', $product->slug) }}" class="product-card">
                                    <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="Product Image" class="card-img-top px-3 py-3">
                                    <div class="card-body">
                                        <div class="product-name card-text font-weight-bold">{{ $product->name }}</div>
                                        <div class="product-price card-text font-weight-normal">{{ $product->presentPrice() }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center py-5">
                    <a href="#" class="btn button-dark">View more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection