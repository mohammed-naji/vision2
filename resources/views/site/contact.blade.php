@extends('site.master')

@section('title', 'Contact')

@section('main')
<main>
    <h1>Contact</h1>
    <p>{{ $content }}</p>

    @include('site.parts.about_us')
</main>
@endsection
