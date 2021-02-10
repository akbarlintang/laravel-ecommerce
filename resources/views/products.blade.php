@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="py-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </div>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="container">
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
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div>

                <div class="text-center py-5">
                    <a href="#" class="btn button-dark">View more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection