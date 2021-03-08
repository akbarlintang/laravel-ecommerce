<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zeroshop | One stop solution for your gadget needs</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav id="navbar-top" class="navbar navbar-expand-lg navbar-light">
                <div class="container nav-top">
                    <a class="navbar-brand logo" href="{{ route('home-page') }}">Zeroshop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
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

            <div class="hero container">
                <div class="hero-copy">
                    <h1 class="text-white">Zeroshop</h1>
                    <p class="text-white">One stop solution for your gadget needs.</p>
                    <div class="hero-buttons">
                        <a href="/shop" class="btn button">Shop Now</a>
                    </div>
                </div>

                <div class="hero-img">
                    <img src="img/macbookpro.png" alt="Macbook Pro">
                </div>
            </div>
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center section-header">Zeroshop</h1>

                <p class="section-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.</p>

                <div class="text-center button-container">
                    <a href="#" class="btn button-dark">Featured</a>
                    <a href="#" class="btn button-dark">On Sale</a>
                </div>

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="card">
                            <a href="{{ route('shop.show', $product->slug) }}" class="product-card shadow">
                                <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="Product Image" class="card-img-top px-3 py-3 product-img w-auto">
                                <div class="card-body">
                                    <div class="product-name card-text font-weight-bold">{{ $product->name }}</div>
                                    <div class="product-price card-text font-weight-normal">{{ $product->presentPrice() }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="btn button-dark">View more</a>
                </div>
            </div>
        </div>

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center section-header">From Our Blog</h1>

                <p class="section-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. In unde neque excepturi alias corrupti tenetur repellat impedit necessitatibus aliquam placeat mollitia, eaque, deleniti dignissimos consequatur. Nostrum nihil enim asperiores quasi?</p>

                <div class="blog-posts">
                    <div class="card blog-post">
                        <a href="#" class="product-card">
                            <img src="img/blog1.png" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h2 class="blog-title card-text font-weight-bold text-center">Blog Post Title 1</h2>
                                <div class="blog-desc card-text font-weight-normal py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
                            </div>
                        </a>
                    </div>
                    <div class="card blog-post">
                        <a href="#" class="product-card">
                            <img src="img/blog1.png" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h2 class="blog-title card-text font-weight-bold text-center">Blog Post Title 1</h2>
                                <div class="blog-desc card-text font-weight-normal py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
                            </div>
                        </a>
                    </div>
                    <div class="card blog-post">
                        <a href="#" class="product-card">
                            <img src="img/blog1.png" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h2 class="blog-title card-text font-weight-bold text-center">Blog Post Title 1</h2>
                                <div class="blog-desc card-text font-weight-normal py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made by Akbar Lintang Aji</div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </footer>

        <script src="/js/app.js"></script>
    </body>
</html>
