@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="py-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </div>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h4 class="font-weight-bold pb-3">3 items in Shopping Cart</h4>
            <div class="border-bottom"></div>

            <div class="row pt-3">
                <div class="col-2 my-auto mx-auto">
                    <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                </div>

                <div class="col-5 mx-auto my-auto">
                    <h5 class="font-weight-bold">MacBook Pro</h5>
                    <h5 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h5>
                </div>
                <div class="col-2 mx-auto my-auto">
                    <div class="float-right">
                        <a href="#"><h6>Remove</h6></a>
                    </div>
                    <div class="float-right">
                        <a href="#"><h6>Save for later</h6></a>
                    </div>
                </div>
                <div class="col-1 mx-auto my-auto">
                    <input type="number" min="1" value="1" class="w-100 text-center">
                </div>
                <div class="col-2 mx-auto my-auto">
                    <h5>$2499.99</h5>
                </div>
            </div>
            <div class="border-bottom pt-3"></div>

            <div class="row pt-3">
                <div class="col-2 my-auto mx-auto">
                    <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                </div>

                <div class="col-5 mx-auto my-auto">
                    <h5 class="font-weight-bold">MacBook Pro</h5>
                    <h5 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h5>
                </div>
                <div class="col-2 mx-auto my-auto">
                    <div class="float-right">
                        <a href="#"><h6>Remove</h6></a>
                    </div>
                    <div class="float-right">
                        <a href="#"><h6>Save for later</h6></a>
                    </div>
                </div>
                <div class="col-1 mx-auto my-auto">
                    <input type="number" min="1" value="1" class="w-100 text-center">
                </div>
                <div class="col-2 mx-auto my-auto">
                    <h5>$2499.99</h5>
                </div>
            </div>
            <div class="border-bottom pt-3"></div>

            <div class="row pt-3">
                <div class="col-2 my-auto mx-auto">
                    <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                </div>

                <div class="col-5 mx-auto my-auto">
                    <h5 class="font-weight-bold">MacBook Pro</h5>
                    <h5 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h5>
                </div>
                <div class="col-2 mx-auto my-auto">
                    <div class="float-right">
                        <a href="#"><h6>Remove</h6></a>
                    </div>
                    <div class="float-right">
                        <a href="#"><h6>Save for later</h6></a>
                    </div>
                </div>
                <div class="col-1 mx-auto my-auto">
                    <input type="number" min="1" value="1" class="w-100 text-center">
                </div>
                <div class="col-2 mx-auto my-auto">
                    <h5>$2499.99</h5>
                </div>
            </div>
            <div class="border-bottom pt-3"></div>
        </div>
    </div>
</div>
@endsection