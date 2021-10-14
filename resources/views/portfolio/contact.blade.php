@extends('portfolio.master')

@section('title', 'Contact - Portfolio')

@section('main')
<br>
<br>
<br>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif --}}
                <form id="contactForm" action="{{ route('port.contactSubmit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('delete') --}}
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." value="{{ old('name') }}" />
                        <label for="name">Full name</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" placeholder="name@example.com" name="email" value="{{ old('email') }}" />
                        <label for="email">Email address</label>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" name="phone" value="{{ old('phone') }}" />
                        <label for="phone">Phone number</label>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="file" name="image" />
                        <label for="name">Image</label>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
@stop

