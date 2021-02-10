<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zeroshop | Find all your gadget needs</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav id="navbar-top" class="navbar navbar-expand-lg navbar-dark">
                <div class="container nav-top">
                    <a class="navbar-brand logo" href="#">Zeroshop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto justify-content-around">
                            <a class="nav-link" href="#">Shop</a>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link" href="#">Blog</a>
                            <a class="nav-link" href="#">Cart</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!--
            <div id="navbar-top" class="top-nav container">
                <div class="logo">Zeroshop</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>
            -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Zeroshop</h1>
                    <p>Find all your gadget needs.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn button">Button 1</a>
                        <a href="#" class="btn button">Button 2</a>
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
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                        <a href="#"><div class="product-name">Macbook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div>

                <div class="text-center button-container">
                    <a href="#" class="btn button-dark">View more</a>
                </div>
            </div>
        </div>

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center section-header">From Our Blog</h1>

                <p class="section-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. In unde neque excepturi alias corrupti tenetur repellat impedit necessitatibus aliquam placeat mollitia, eaque, deleniti dignissimos consequatur. Nostrum nihil enim asperiores quasi?</p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam facere nihil voluptates.</div>
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
