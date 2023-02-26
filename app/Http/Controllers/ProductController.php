<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function getProducts()
    {
        // model
        // table is plural
        // model is singular
        // products
        // product
        // select products from database
        $products = Product::get();

        // dump and die
        // dd($products);
        // display products in view table
        return view('products', ['products' => $products]);
    }
}
