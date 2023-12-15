@extends('layouts.main')
@section('content')
<h1 class="text-center my-4">Contact Us</h1>
<p class="text-center fs-5">Hubungi Kami Melalui Form Berikut</p>

@if ($message = Session::get('terkirim'))
<div class="container text-center mt-5 mb-4">
    <h4>{{ $message }}</h4>
</div>
@endif
<div class="container">
    <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
        <div class="col-12 col-sm-8 col-md-10 m-auto my-4">
            @csrf
            <div class="form-group input-group-lg">
                <label class="mb-2">NAME <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror rounded-0" placeholder="Your Name">
                <!-- error message untuk name -->
                @error('name')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group input-group-lg mt-4">
                <label class="mb-2">EMAIL <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror rounded-0" placeholder="Your Email">
                <!-- error message untuk email -->
                @error('email')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group input-group-lg mt-4">
                <label class="mb-2">MESSAGE <span class="text-danger">*</span></label>
                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror rounded-0" placeholder="Enter Your Message"></textarea>
                <!-- error message untuk message -->
                @error('message')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-lg rounded-0 mt-4">SUBMIT</button>
        </div>
    </form>
</div>
@endsection