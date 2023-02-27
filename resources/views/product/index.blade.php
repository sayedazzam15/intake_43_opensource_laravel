<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .active {
            background: gray;
        }
    </style>
</head>

<body>
    <a href="{{ route('product.create') }}">create product</a>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>quantity</th>
                <th>category_id</th>
                <th>created_at</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            {{-- what is composer --}}
            {{-- install laravel/installer --}}
            {{-- create new laravel application using useing laravel installer ( laravel new ecommerce) --}}
            {{-- MVC design pattern --}}
            {{-- what is Routes and how to create and use one --}}
            {{-- we must configure our database inside .env file --}}
            {{-- how To create controller php artisan make:controller ProductController --}}
            {{-- how to display view using controller function --}}
            {{-- what is model and how to create one ( php artisan make:model Product) --}}
            {{-- model naming convinction
                (if table is plural so model must be singluar)
                else
                we must define model table by using
                protected $table='table name'
            --}}
            {{-- how to use model to fetch data from database --}}
            {{-- how to display model data into view table --}}
            {{-- blade directives --}}
            {{-- display all resource --}}
            {{-- show single resource --}}
            {{-- update resource --}}
            {{-- delete resource --}}
            @foreach ($products as $product)
                <tr class="@if ($loop->first) active @endif">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <a href="{{ route('product.show', $product->id) }}">show</a>
                        <form action="{{ route('product.update', $product->id) }}">
                            <button>update</button>
                        </form>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf()
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
