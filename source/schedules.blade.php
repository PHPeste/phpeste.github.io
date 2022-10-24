@extends('_layouts.master')

@section('content')
  <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="mb-4">Programação</h1>
        </div>
      </div>
    </div>
  </div>  
  
  @include('_shared.schedule', ['title' => 'Programação'])
  @include('_shared.contact-info')
@endsection

