<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{
    //
    function index()
    {
        // model
        // table is plural
        // model is singular
        // products
        // product
        // select products from database
        $products = Product::with('category')->paginate();

        // dump and die
        // dd($products);
        // display products in view table
        return view('product.index', ['products' => $products]);
    }
    function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
    function destroy($id)
    {
        // Product::where('id',$id)->delete();
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    function update($id)
    {
        $product = Product::find($id);
        return view('product.update', compact('product'));
    }
    function edit($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->except(['_method', '_token']));
        return redirect()->route('product.index');
    }
    function create()
    {
        $inputs = $this->formInput();
        return view('product.create', compact('inputs'));
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->route('product.index');
    }
    function formInput()
    {
        return [
            [
                'inputName' => 'name',
                'inputLabel' => 'username'
            ],
            [
                'inputName' => 'price',
                'inputLabel' => 'userprice'
            ],
            [
                'inputName' => 'description',
                'inputLabel' => 'userdescription'
            ],
            [
                'inputName' => 'category_id',
                'inputLabel' => 'usercategory_id'
            ],
            [
                'inputName' => 'quantity',
                'inputLabel' => 'userquantity'
            ],
        ];
    }
}
