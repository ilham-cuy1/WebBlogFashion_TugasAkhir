@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card mx-auto border-0" style="max-width: 70rem;">
        <div class="card-body">
            <h1 class="text-center mb-4 mt-4">{{ $fashion->title }}</h1>
        </div>
    </div>
</div>
<img src="{{ asset('/storage/posts/'.$fashion->image) }}" class="img-fluid" style="max-height: 700px; width: 100%;">
<div class="container">
    <div class="card mx-auto mt-4 border-0" style="max-width: 60rem;">
        <div class="card-body">
            <hr>
            <p class="mt-4 mb-4 text-secondary text-end">Dibuat pada <span class="fw-semibold">{{ $fashion->created_at }}</span> <span class="ms-2 me-2">|</span> Diperbarui <span class="fw-semibold">{{ $fashion->updated_at }}</span></p>
            <hr>
            <p class="mt-4">{!! $fashion->content !!}</p>
        </div>
    </div>
</div>
@endsection