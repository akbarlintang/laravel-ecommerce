<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zeroshop | One stop solution for your gadget needs</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('extra-css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand logo" href="{{ route('home-page') }}">Zeroshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-list" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto justify-content-around">
                        <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Blog</a>
                        <a class="nav-link" href="{{ route('cart.index') }}">Cart  
                            @if (Cart::instance('default')->count() > 0)
                                <span class="cart-q">{{ Cart::instance('default')->count() }}</span>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="py-5">
            @yield('content')
        </div>

        @include('partials.footer')

        @yield('extra-js')
    </body>
</html>
