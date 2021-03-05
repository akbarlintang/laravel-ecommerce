<div class="offered-products mt-5">
    <div class="container">
        <h3 class="pb-3 text-center font-weight-bold">You might also like</h3>
        <div class="row text-center pl-5 pr-5">
            @foreach ($mightLike as $product)
                <div class="col-sm">
                    <div class="card">
                        <a href="{{ route('shop.show', $product->slug) }}" class="product-card shadow">
                            <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="Product Image" class="card-img-top px-3 py-3 product-img w-auto">
                            <div class="card-body">
                                <div class="product-name card-text font-weight-bold">{{ $product->name }}</div>
                                <div class="product-price card-text font-weight-normal">{{ $product->presentPrice() }}</div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>