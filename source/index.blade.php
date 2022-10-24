@extends('_layouts.master')

@section('content')
<div class="site-blocks-cover overlay" 
     style="background-image: url({{ url('/assets/images/background.jpg') }});" 
     data-aos="fade" 
     data-stellar-background-ratio="0.5"
>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Maior conferência PHP do Nordeste</h1>
            <div class="mb-5">
                <p>
                    {{ $page->event_period }} &bullet; 
                    <u>2022</u>
                </p>
                <a class="maps" href="" target="_blank">
                    {{ $page->event_location }}
                </a>
            </div>
            <div class="col-md-8 mx-auto text-center section-heading">
                <div id="date-countdown" class="mb-4"></div>
            </div>
            <a href="{{ $page->event_ticket }}" class="btn btn-primary btn-lg px-4 py-2">
              {{ $page->event_ticket_cta }}
            </a>
          </div>
        </div>
      </div>
    </div>

    @include('_about')
    
    @include('_shared.block-images', ['image1' => 'images/img_1.jpg', 'image2' => 'images/img_2.jpg'])
    @include('_shared.block-images', ['image1' => 'images/img_3.jpg', 'image2' => 'images/img_4.jpg'])

    @include('_shared.sponsors', ['title' => 'Patrocinadores'])
@endsection
