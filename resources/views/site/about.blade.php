@extends('site.master')
@section('main')
<main>
    <h1>About</h1>
    <p>{{ $content }}</p>

    @include('site.parts.about_us')
</main>
@stop
