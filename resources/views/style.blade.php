@extends('layouts.main')
@section('content')
<div class="container">
  <h1 class="text-center mt-4">Men's Style</h1>
  <p class="text-center mb-5" style="font-size: 19px;">Sebuah gaya untuk manusia modern. Termasuk tips orang dalam, tren fesyen pria terkini, inspirasi pakaian, dan panduan merek pakaian pria terbaik, untuk membantu Anda berpakaian lebih baik setiap hari</p>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse ($styles as $style)
    <div class="col-md-5 col-lg-4">
      <div class="card border-0">
        <a href="/styles/{{ $style->id }}" class="text-decoration-none">
          <img src="{{ asset('/storage/posts/'.$style->image) }}" class="card-img-top rounded-0" alt="image" height="270px">
          <h5 class="card-title text-black mt-3">{{ Str::limit($style->title, 78, '...') }}</h5>
        </a>
      </div>
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
</div>
@endsection