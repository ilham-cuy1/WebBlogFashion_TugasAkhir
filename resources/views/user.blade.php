@extends('layouts.main')
@section('content')
<section class="slide">
  <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(images/Perbedaan_Jaket_Kulit_Asli_dan_Palsu.png)">
        <div class="carousel-caption d-md-block">
          <h3 class="fw-bold">
            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING
          </h3>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(images/weird-trends-1536x896.jpg)">
        <div class="carousel-caption d-md-block">
          <h3 class="fw-bold">
            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING
          </h3>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(images/best-shirts-men.webp)">
        <div class="carousel-caption d-md-block">
          <h3 class="fw-bold">
            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING EL
          </h3>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel" aria-hidden="true"><i class="fa-solid fa-angle-left fa-2xl" style="color: #ffffff"></i></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel" aria-hidden="true"><i class="fa-solid fa-angle-right fa-2xl" style="color: #ffffff"></i></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<div class="container">
  <div class="mt-5">
    <h3 class="fw-semibold">READ MORE</h3>
    <hr>
  </div>
</div>
<div class="card mb-3 mt-5 mb-5 rounded-0 border-0" style="max-width: 100%; background-color: #eeeded">
  <div class="container">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="images/Gentleman-720x864.webp" class="img-fluid rounded-0 mt-4 mb-4" alt="..." style="height: 450px; width: 400px">
      </div>
      <div class="col-md-8">
        <div class="card-body mt-5">
          <p class="card-text fs-5"><i>“Manusia modern bukanlah tahap akhir dalam proses evolusi Darwin.
              Seorang pria sejati harus selalu berusaha untuk memperkaya dirinya lebih jauh melalui pengalaman,
              pengembangan diri dan menikmati kualitas, sambil tetap memperhatikan nilai.
              Dan mungkin yang paling penting, kita harus ingat bahwa pria sejati adalah orang yang memberikan lebih banyak hal pada dunia daripada yang ia keluarkan.”</i>
          </p>
          <a href="/about"><button type="button" class="btn btn-outline-dark rounded-0 text-black btn-sm mt-3 mb-4">ABOUT ALBAR STYLE</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- search -->
<div class="container">
  <form action="" method="get">
    <div class="input-group my-4">
      <input type="search" name="keyword" class="form-control rounded-0" placeholder="Search" aria-describedby="button-addon2">
      <button class="btn btn-dark rounded-0" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </form>
</div>
<!--  -->

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse($posts as $row)
    <div class="col-md-5 col-lg-4">
      <div class="card border-0">
        <a href="/tampil/{{ $row->id }}" class="text-decoration-none">
          <img src="{{ asset('/storage/posts/'.$row->image) }}" class="card-img-top rounded-0" alt="image" height="270px">
          <h5 class="card-title text-black mt-3">{{ Str::limit($row->title, 78, '...') }}</h5>
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