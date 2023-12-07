<!-- <div class="container bottom-0">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">
            &copy; 2023 Company, Inc
        </p>
    </footer>
</div> -->
<footer style="background-color: #000000" class="text-white mt-5">
  <div class="container justify-content-center">
    <div class="row text-start">
      <div class="col-lg-5 mt-5">
        <img src="{{ asset('images/albarstyle_putih-02.png') }}" style="width: 190px">
        <p class="mt-3">
          <span style="text-decoration: none;" class="text-white mt-4">Website Blog Tentang Fashion, AlbarStyle adalah website berisi tentang fashion kekinian dan keren buat para lelaki. Pengen penampilan yang keren? Solusinya ya hanya di sini. </span>
        </p>
      </div>
      <div class="col-lg-4 mt-5 ms-auto">
        <!-- <div class="card"> -->
          <!-- <div class="card-body "> -->
          <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube fa-2xl" style="color: #f7f7f7;"></i></a>
          <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl ms-4" style="color: #ffffff;"></i></a>
          <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram fa-2xl ms-4" style="color: #ffffff;"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter fa-2xl ms-4" style="color: #ffffff;"></i></a>
          <!-- </div>
        </div> -->
      </div>
      <div class="col-lg-1">
        <button type="button" class="btn btn-light rounded-0 mt-5" onclick="scrollKeatas()"><i class="fa-solid fa-arrow-up fa-lg" style="color: #000000;"></i></button>
      </div>
      <hr class="mt-3">
      <div class="col-lg-10 mt-3 mb-3">
        <span class="text-secondary">Copyright &copy;2023 AlbarStyle</span>
      </div>
      <div class="col-lg-2 col-md-3 mt-3 mb-3 priv">
        <a href="/privacy-policy" class="text-decoration-none">
          <p>Privacy Policy</p>
        </a>
      </div>
    </div>
  </div>
</footer>

<script>
  function scrollKeatas() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    })
  }
</script>

<script>
  var nav = document.querySelector('nav');
  window,addEventListener('scroll', function(){
    if(window.pageYOffset > 50){
      nav.classList.add('bg-white', 'shadow');
    }else{
      nav.classList.remove('bg-white', 'shadow');
    }
  })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>