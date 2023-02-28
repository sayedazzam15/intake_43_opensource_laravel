<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <fieldset>
        <legend>category</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->name }}</td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>products</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>description</th>
                    <th>quantity</th>
                    <th>category name</th>
                    <th>created_at</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>

</html>
