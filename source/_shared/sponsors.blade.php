<div class="site-section">
  <div class="container">
    @if(isset($title))
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-md-12 col-lg-12">
        <h1 class="text-center">Seja um <a target="_blank" href="{{ url('/contact') }}">patrocinador</a>!</h1>
      </div>
    </div>
  </div>
</div>
