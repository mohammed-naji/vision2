<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>

    <table border="1">
        <tr>
            <td>#</td>
            <th>Name</th>
            <th>Avg</th>
        </tr>

        @foreach ($stds as $std)
        <tr>
            {{-- <td>{{ $loop->index + 1 }}</td> --}}
            <td>{{ $loop->iteration }}</td>
            <td>{{ $std[0] }}</td>
            {{-- <td>{{ $std[1] }}</td> --}}
            <td><a href="{{ route('avg', [$std[0], $std[1]]) }}">See avg</a></td>
        </tr>
        @endforeach
    </table>

</body>
</html>
