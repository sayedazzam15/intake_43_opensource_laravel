<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <x-test-component>
        <h1>Adipisicing aute laboris pariatur non enim amet incididunt.</h1>
    </x-test-component>

    <div class="row justify-between">
        <form class="col-6" action="{{ route('product.store') }}" method="POST">
            @csrf
            @foreach ($inputs as $input)
                <div>
                    <x-bootstrap-input :label="$input['inputLabel']" :inputName="$input['inputName']" />
                </div>
            @endforeach
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</body>

</html>
