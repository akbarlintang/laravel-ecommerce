@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="py-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </div>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Cart::count() > 0)

            <h4 class="font-weight-bold pb-3">{{ Cart::count() }} item(s) in Shopping Cart</h4>
            <div class="border-bottom"></div>

            @foreach (Cart::content() as $item)
            <div class="row pt-3">
                <div class="col-sm-2 my-auto mx-auto">
                    <a href="{{ route('shop.show', $item->model->slug) }}">
                        <img src="{{ asset('img/products/'.$item->model->slug.'.png') }}" alt="Product Image">
                    </a>
                </div>

                <div class="col-sm-4 mx-auto my-auto p-top text-center">
                    <a href="{{ route('shop.show', $item->model->slug) }}"><h5 class="font-weight-bold">{{ $item->model->name }}</h5></a>
                    <h5 class="text-secondary">{{ $item->model->details }}</h5>
                </div>
                </a>

                <div class="col-sm-2 mx-auto my-auto p-top text-center">
                    <div>
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn-sm btn btn-danger">Remove</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('cart.switchSave', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="btn-sm btn btn-success">Save for Later</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2 mx-auto my-auto p-top">
                    <select class="custom-select text-center">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-sm-2 mx-auto my-auto text-center p-top">
                    <h5>{{ $item->model->presentPrice() }}</h5>
                </div>
            </div>
            <div class="border-bottom pt-3"></div>
            @endforeach

            <div class="text-center">
                <h5 class="pt-5 pb-3">Have a code?</h5>
            
                <input type="text" class="w-50">
                <button class="btn btn-sm button-dark">Apply</button>

                <div class="row pt-5">
                    <div class="col-6">
                        <h5>Subtotal</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ '$ ' . number_format(Cart::subtotal() / 100) }}</h5>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <h5>Tax</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ '$ ' . number_format(Cart::tax() / 100) }}</h5>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <h5 class="font-weight-bold">Total</h5>
                    </div>
                    <div class="col-6">
                        <h5 class="font-weight-bold">{{ '$ ' . number_format(Cart::total() / 100) }}</h5>
                    </div>
                </div>
            </div>

            <div class="text-center pt-5">
                <a href="{{ route('shop.index') }}" class="btn btn-primary text-white btn-lg mb-3 mx-3">Continue shopping</a>
                <a href="/checkout" class="btn btn-success btn-lg text-white mb-3 mx-3">Proceed to Checkout</a>
            </div>

            @else
                <div class="alert alert-danger">
                    <h5 class="text-danger">You have no items in Cart.</h5>
                </div>

                <div class="text-center">
                    <a href="{{ route('shop.index') }}" class="btn btn-primary text-white btn-lg">Continue shopping</a>
                </div>

            @endif

            @if (Cart::instance('saveForLater')->count() > 0)

            <h4 class="font-weight-bold pt-5 pb-3">{{ Cart::instance('saveForLater')->count() }} item(s) Saved for Later</h4>
            <div class="border-bottom"></div>

            @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="row pt-3">
                    <div class="col-sm-2 my-auto mx-auto">
                        <a href="{{ route('shop.show', $item->model->slug) }}">
                            <img src="{{ asset('img/products/'.$item->model->slug.'.png') }}" alt="Product Image">
                        </a>
                    </div>

                    <div class="col-sm-4 mx-auto my-auto p-top text-center">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><h5 class="font-weight-bold">{{ $item->model->name }}</h5></a>
                        <h5 class="text-secondary">{{ $item->model->details }}</h5>
                    </div>
                    <div class="col-sm-2 mx-auto my-auto p-top text-center">
                        <div>
                            <form action="{{ route('later.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn-sm btn btn-danger">Remove</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('later.switchCart', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="btn-sm btn btn-success">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 mx-auto my-auto p-top">
                        <select class="custom-select text-center">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-sm-2 mx-auto my-auto text-center p-top">
                        <h5>{{ $item->model->presentPrice() }}</h5>
                    </div>
                </div>
                <div class="border-bottom pt-3"></div>

            @endforeach

            @else

                <div class="alert alert-danger mt-3">
                    <h5 class="text-danger">You have no items Saved for Later.</h5>
                </div>

            @endif
        </div>
    </div>
</div>

@include('partials.related')

@endsection