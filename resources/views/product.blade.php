@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="py-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </div>
    </ol>
</nav>

<div class="container">
    <div class="row py-3 pl-5 pr-5">
        <div class="col-sm">
            <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
        </div>
        <div class="col-sm product-field">
            <h3 class="font-weight-bold">MacBook Pro 2018</h3>
            <h5 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h5>
            <h4 class="font-weight-bold">$2499.99</h4>

            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sapiente consequuntur excepturi veritatis eaque! Mollitia quia soluta distinctio iste placeat, sunt ducimus aliquam quis fugit. Reiciendis voluptatibus animi facere ad!</p>

            <button class="btn button-dark">Add to Cart</button>
        </div>
    </div>
</div>

<div class="offered-products mt-5">
    <div class="container">
        <h3 class="pb-3 text-center font-weight-bold">You might also like</h3>
        <div class="row text-center pl-5 pr-5">
            <div class="col-sm">
                <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                <a href="#"><div class="product-name">Macbook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="col-sm">
            <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                <a href="#"><div class="product-name">Macbook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="col-sm">
            <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                <a href="#"><div class="product-name">Macbook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="col-sm">
            <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                <a href="#"><div class="product-name">Macbook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
        </div>
    </div>
</div>
@endsection