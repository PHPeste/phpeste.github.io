<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-12 text-left section-heading">
        <h4 class="mb-5 text-uppercase">{{ $page->categories['diamond']['description'] }}</h4>
      </div>

      @foreach ($sponsors->filter(fn ($s) => $s->type === 'diamond') as $sponsor)
        <div class="col-12 col-md-6 col-lg-6 sponsor">
          @if($sponsor->website)
            <a href="{{ $sponsor->website }}" target="_blank" class="btn">
              <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
            </a>
          @else
            <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
          @endif
        </div>
      @endforeach
    </div>
    <div class="row mb-5">
      <div class="col-md-12 text-left section-heading">
        <h4 class="mb-5 text-uppercase">{{ $page->categories['silver']['description'] }}</h4>
      </div>

      @foreach ($sponsors->filter(fn ($s) => $s->type === 'silver') as $sponsor)
        <div class="col-6 col-md-4 col-lg-4 sponsor">
          @if($sponsor->website)
            <a href="{{ $sponsor->website }}" target="_blank" class="btn">
              <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
            </a>
          @else
            <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
          @endif
        </div>
      @endforeach
    </div>
    <div class="row mb-5">
      <div class="col-md-12 text-left section-heading">
        <h4 class="mb-5 text-uppercase">{{ $page->categories['bronze']['description'] }}</h4>
      </div>

      @foreach ($sponsors->filter(fn ($s) => $s->type === 'bronze') as $sponsor)
        <div class="col-4 col-md-2 col-lg-2 sponsor">
          @if($sponsor->website)
            <a href="{{ $sponsor->website }}" target="_blank" class="btn">
              <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
            </a>
          @else
            <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
          @endif
        </div>
      @endforeach
    </div>
  
    <div class="row mb-5">
      <div class="col-md-12 col-lg-12 mb-4">
        <h1 class="text-center">Seja um <a target="_blank" href="https://bit.ly/3OEAiOy">patrocinador</a>!</h1>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-12 text-left section-heading">
        <h4 class="mb-5 text-uppercase">{{ $page->categories['support']['description'] }}</h4>
      </div>

      @foreach ($sponsors->filter(fn ($s) => $s->type === 'support') as $sponsor)
        <div class="col-4 col-md-2 col-lg-2 sponsor">
          @if($sponsor->website)
            <a href="{{ $sponsor->website }}" target="_blank" class="btn">
              <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
            </a>
          @else
            <img src="{{ url($sponsor->image) }}" alt="{{ $sponsor->name }}" class="img-fluid">
          @endif
        </div>
      @endforeach
    </div>
  </div>
</div>
