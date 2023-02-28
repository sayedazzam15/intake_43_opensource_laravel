<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    function index()
    {
        $orders = Order::get();
        return view('order.index', compact('orders'));
    }
}
