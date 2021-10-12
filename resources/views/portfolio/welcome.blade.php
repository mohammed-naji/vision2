@extends('portfolio.master')

@section('title', 'Contact - Portfolio')

@section('main')
<br>
<br>
<br>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">

        <div class="alert alert-success">
            <p>{{ $name }}</p>
            <p>{{ $email }}</p>
            <p>{{ $phone }}</p>
            <p>{{ $message }}</p>
        </div>

    </div>
</section>
@stop

