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
        <h2>Update Product : {{ $product->name }}</h2>
        <a href="{{ route('products.index') }}" class="btn btn-outline-success">All Products</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form class="mt-4" action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name', $product->name) }}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description" rows="5">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <img width="200" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" value="{{ old('price', $product->price) }}" class="form-control" placeholder="Price">
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control" placeholder="Stock">
            </div>

            <button class="btn btn-warning">Update</button>

        </form>

    </div>

</body>
</html>
