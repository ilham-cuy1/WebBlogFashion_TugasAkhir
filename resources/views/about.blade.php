@extends('layouts.main')
@section('content')
<div class="container">
    @forelse ($abouts as $about)
    <div class="card mx-auto border-0" style="max-width: 60rem;">
        <div class="card-body">
            <h1 class="text-center mb-4 mt-4">{{ $about->title }}</h1>
            <h4 class="text-center mt-4">{{ $about->sub_title }}</h4>
        </div>
    </div>

    <div class="card mx-auto mt-3 border-0" style="max-width: 60rem;">
        <div class="card-body">
            <p>{!! $about->content !!}</p>
        </div>
        <img src="{{ asset('/storage/posts/'.$about->image) }}" class="img-fluid mx-auto" style="max-width: 45vh;">

    </div>

    @empty
    <div class="container">
      <div class="card border-0 mt-3" style="width: 100%;">
        <div class="card-body text-center">
          <h5 class="card-title">Not Found</h5>
        </div>
      </div>
    </div>
    @endforelse
</div>
@endsection