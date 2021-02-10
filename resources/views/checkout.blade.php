@extends('layout')

@section('content')
<div class="container pt-5">
    <h1 class="font-weight-bold">Checkout</h1>

    <div class="row">
        <div class="col-sm-7 pb-5">
            <div class="container">
                <form action="/p" enctype="multipart/form-data" method="post" class="pr-5">
                    @csrf
                        <h2 class="font-weight-bold">Billing Details</h2>

                        <div class="form-group row px-3">
                            <label for="email" class="col-md-4 col-form-label">Email Address</label>

                            <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row px-3">
                            <label for="name" class="col-md-4 col-form-label">Name</label>

                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row px-3">
                            <label for="address" class="col-md-4 col-form-label">Address</label>

                            <input id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="city" class="col-md-4 col-form-label">City</label>

                                <input id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="province" class="col-md-4 col-form-label">Province</label>

                                <input id="province" type="text" name="province" class="form-control @error('province') is-invalid @enderror" value="{{ old('province') }}" autocomplete="province" autofocus>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="postal" class="col-md-8 col-form-label">Postal Code</label>

                                <input id="postal" type="text" name="postal" class="form-control @error('postal') is-invalid @enderror" value="{{ old('postal') }}" autocomplete="postal" autofocus>

                                @error('postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="col-md-4 col-form-label">Phone</label>

                                <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <h2 class="font-weight-bold pt-4">Payment Details</h2>

                        <div class="form-group row px-3">
                            <label for="nameoc" class="col-md-4 col-form-label">Name on Card</label>

                            <input id="nameoc" type="text" name="nameoc" class="form-control @error('nameoc') is-invalid @enderror" value="{{ old('nameoc') }}" autocomplete="nameoc" autofocus>

                            @error('nameoc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row px-3">
                            <label for="addressoc" class="col-md-4 col-form-label">Address on Card</label>

                            <input id="addressoc" type="text" addressoc="addressoc" class="form-control @error('addressoc') is-invalid @enderror" value="{{ old('addressoc') }}" autocomplete="addressoc" autofocus>

                            @error('addressoc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="pt-4 pb-3">
                            <button class="btn btn-primary btn-lg">Checkout</button>
                        </div>
                </form>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="container">
                <h2 class="font-weight-bold">Your Order</h2>
                <div class="border-bottom"></div>

                <div class="row pt-3">
                    <div class="col-3 my-auto mx-auto">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                    </div>

                    <div class="col-7 mx-auto my-auto">
                        <h6 class="font-weight-bold">MacBook Pro</h6>
                        <h6 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h6>
                        <h6>$2499.99</h6>
                    </div>
                    <div class="col-2 mx-auto my-auto">
                        <input type="number" min="1" value="1" class="w-100 text-center">
                    </div>
                </div>
                <div class="border-bottom"></div>

                <div class="row pt-3">
                    <div class="col-3 my-auto mx-auto">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                    </div>

                    <div class="col-7 mx-auto my-auto">
                        <h6 class="font-weight-bold">MacBook Pro</h6>
                        <h6 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h6>
                        <h6>$2499.99</h6>
                    </div>
                    <div class="col-2 mx-auto my-auto">
                        <input type="number" min="1" value="1" class="w-100 text-center">
                    </div>
                </div>

                <div class="border-bottom"></div>
                <div class="row pt-3">
                    <div class="col-3 my-auto mx-auto">
                        <a href="#"><img src="img/macbookpro.png" alt="Product Image"></a>
                    </div>

                    <div class="col-7 mx-auto my-auto">
                        <h6 class="font-weight-bold">MacBook Pro</h6>
                        <h6 class="text-secondary">15 inch, 1TB SSD, 32GB RAM</h6>
                        <h6>$2499.99</h6>
                    </div>
                    <div class="col-2 mx-auto my-auto">
                        <input type="number" min="1" value="1" class="w-100 text-center">
                    </div>
                </div>
                <div class="border-bottom"></div>

                <div class="row pt-3">
                    <div class="col-8">
                        <h5>Subtotal</h5>
                    </div>
                    <div class="col-4">
                        <h5 class="float-right">$ 7499.97</h5>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-8">
                        <h5>Discount (10OFF - 10%)</h5>
                    </div>
                    <div class="col-4">
                        <h5 class="float-right">-$ 750.00</h5>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-8">
                        <h5>Tax</h5>
                    </div>
                    <div class="col-4">
                        <h5 class="float-right">$ 975.00</h5>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-8">
                        <h5 class="font-weight-bold">Total</h5>
                    </div>
                    <div class="col-4">
                        <h5 class="font-weight-bold float-right">$ 8474.97</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection