@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="nav-bread pb-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item font-weight-bold"><a href="/">Home</a></li>
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
                    @foreach ($categories as $category)
                        <h6 class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></h6>
                    @endforeach
                </div>

                <!-- <h5 class="font-weight-bold pt-3">By Price</h5>
                <div class="container">
                    <h6><a href="#">< Rp 3.000.000</a></h6>
                    <h6><a href="#">Rp 3.000.000 - Rp 8.000.000</a></h6>
                    <h6><a href="#">> Rp 8.000.000</a></h6>
                </div> -->
            </div>
        </div>
        <div class="col-sm-9">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center product-header pb-3">
                    <h1 class="font-weight-bold text-center">{{ $categoryName }}</h1>
                    <div class="font-weight-normal">
                        <span class="font-weight-bold">Price :</span>
                        <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                        <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                    </div>
                </div>

                <div class="row">
                    @forelse ($products as $product)                 
                        <div class="col-sm-4 text-center pb-5">
                            <div class="card">
                                <a href="{{ route('shop.show', $product->slug) }}" class="product-card shadow">
                                    <img src="{{ asset('/storage/'.$product->image) }}" alt="Product Image" class="card-img-top px-3 py-3 product-img w-auto">
                                    <div class="card-body">
                                        <div class="product-name card-text font-weight-bold">{{ $product->name }}</div>
                                        <div class="product-price card-text font-weight-normal">{{ $product->presentPrice() }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @empty
                        <h3>No items found</h3>

                    @endforelse
                </div>

                <div class="pt-3">
                    {{ $products->appends(request()->input())->links() }}
                </div>

                <!-- <div class="text-center py-5">
                    <a href="#" class="btn button-dark">View more</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection