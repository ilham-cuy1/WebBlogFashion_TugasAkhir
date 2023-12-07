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
            <p>Dibuat oleh {{auth()->user()->name}}</p>
            <p>{!! $fashion->content !!}</p>
        </div>
    </div>
</div>
@endsection