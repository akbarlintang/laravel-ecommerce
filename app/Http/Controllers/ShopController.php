<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(9)->get();

        return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightLike = Product::where('slug', '!=', $slug)->mightLike()->get();

        return view('product')->with([
            'product' => $product,
            'mightLike' => $mightLike,
        ]);
    }
}
