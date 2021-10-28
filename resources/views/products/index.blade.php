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

        <form class="mt-4" method="get" action="{{ route('products.index') }}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search..">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
              </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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

            @forelse ($products as $pro)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img width="100" src="{{ asset('uploads/products/'.$pro->image) }}" alt=""></td>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->price }}$</td>
                    <td>{{ $pro->created_at }}</td>
                    <td>{{ $pro->updated_at }}</td>
                    <td>
                        <a href="{{ route('products.edit', [$pro->id]) }}" class="btn btn-info btn-sm">Edit</a>

                        <form class="d-inline" action="{{ route('products.destroy', [$pro->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center">No Data Found</td>
                </tr>
            @endforelse

            {{-- @if ($products->count() > 0)
                @foreach ($products as $pro)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img width="100" src="{{ asset('uploads/products/'.$pro->image) }}" alt=""></td>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->price }}$</td>
                        <td>{{ $pro->created_at }}</td>
                        <td>{{ $pro->updated_at }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>

                            <form class="d-inline" action="{{ route('products.destroy', [$pro->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="7" style="text-align: center">No Data Found</td>
            </tr>
            @endif --}}

        </table>
        {{ $products->links() }}

        <a onclick="return confirm('هل انت متأكد ي ولدي؟!')" href="{{ route('products.delete_all') }}" class="btn btn-danger btn-lg">Delete All Records</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
