@extends('layouts.main')
{{-- @section('default-layout')
    @parent
    <h4>text from child</h4>
@endsection --}}

@section('content')
    <a href="{{ route('product.create') }}">create product</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>user name</th>
                <th>price</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('order.show', $order->id) }}">show</a>
                        {{-- <form action="{{ route('product.update', $product->id) }}">
                            <button>update</button>
                        </form>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf()
                            <button type="submit">delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
