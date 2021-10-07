<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Course')</title>
</head>
<body>

    <header>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('team') }}">Our Team</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </header>

    @yield('main')

    <footer>
        <p>All Copyright reserved to <a href="#">Mohammed Naji</a> @ {{ date('Y') }}</p>
    </footer>


</body>
</html>
