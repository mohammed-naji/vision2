@extends('site.master')

@section('title', 'Homepage')

@section('main')
<main>
    <h1>Homepage</h1>
    <p>{{ $content }}</p>

    @include('site.parts.about_us')
</main>
@endsection


