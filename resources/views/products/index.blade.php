<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5">
        <h2>All Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-outline-success">Create New</a>

        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($products as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td><img width="100" src="{{ asset('uploads/products/'.$pro->image) }}" alt=""></td>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->price }}$</td>
                    <td>{{ $pro->created_at }}</td>
                    <td>{{ $pro->updated_at }}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
