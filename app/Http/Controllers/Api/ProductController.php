<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::get();
        return response()->json(['data' => $products]);
    }
    function store(ProductRequest $request)
    {
        // cors policy
        // request
        try {
            $product = Product::create($request->all());
        } catch (\Throwable $error) {
            return response()->json(['message' => 'server not available now please try again later'], 503);
        }
        return response()->json(['data' => $product], 201);
    }
}
