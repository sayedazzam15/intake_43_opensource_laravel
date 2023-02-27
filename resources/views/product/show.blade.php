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
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>quantity</th>
                <th>category_id</th>
                <th>created_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
