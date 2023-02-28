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
    <a href="{{ route('product.create') }}">create product</a>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('category.show', $category->id) }}">show</a>
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
</body>

</html>
