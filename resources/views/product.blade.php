@extends('layout')

@section('content')
<nav aria-label="breadcrumb" class="nav-bread pb-4">
    <ol class="breadcrumb">
        <div class="container d-flex">
            <li class="breadcrumb-item font-weight-bold"><a href="/">Home</a></li>
            <li class="breadcrumb-item font-weight-bold"><a href="/shop">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </div>
    </ol>
</nav>

<div class="container">
    <div class="row py-3 pl-5 pr-5">
        <div class="col-sm p-3">
            <div class="product-section-image text-center">
                <img src="{{ asset('/storage/'.$product->image) }}" alt="Product Image"id="currentImg" class="active">
                <!-- <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="Product Image"> -->
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected-img">
                    <img src="{{ asset('/storage/'.$product->image) }}" alt="">
                </div>
                @if ($product->images)
                    @foreach (json_decode($product->images, true) as $image)
                        <div class="product-section-thumbnail">
                            <img src="{{ asset('/storage/'.$image) }}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-sm product-field pt-3">
            <h3 class="font-weight-bold">{{ $product->name }}</h3>
            <h5 class="text-secondary">{{ $product->details }}</h5>
            <h4 class="font-weight-bold">{{ $product->presentPrice() }}</h4>

            <p class="pt-3">{!! $product->description !!}</p>

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

@section ('extra-js')
    <script>
        (function() {
            const currentImg = document.querySelector('#currentImg');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImg.classList.remove('active');

                currentImg.addEventListener('transitionend', () => {
                    currentImg.src = this.querySelector('img').src;
                    currentImg.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected-img'));
                this.classList.add('selected-img');
            }
        })();
    </script>
@endsection