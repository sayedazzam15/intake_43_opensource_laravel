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
        <legend>order</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user name</th>
                    <th>price</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>order products</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>order id</th>
                    <th>product name</th>
                    <th>quantiy</th>
                    <th>created_at</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->pivot->quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>

</html>
