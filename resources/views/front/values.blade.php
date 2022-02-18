@extends('front.layout')

@section('main-container')

<main id="main-container">
  <!-- Hero -->
  <div style="background-color: #2D2D2D">
    <div class="bg-black-25">
      <div class="content content-top text-center">
        <div class="py-5">
          <h1 class="fw-bold text-white mb-2">Our Values</h1>
          <h2 class="h4 fw-normal text-white-75">We are as 
            <a href="" class="typewrite" data-period="2000" data-type='[ "strong", "fast-moving", "successful", "ambitious", "innovative", "scrappy", "transparent", "progressive", "inclusive", "open", "professional", "deliberate", "thoughtful", "grounded", "connected" ]'>
              <span class="wrap"></span>
            </a> 
            <!-- innovative scrappy transparent progressive inclusive open professional deliberate thoughtful grounded connected -->
          a group as our weakest team member.</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Blog and Sidebar -->
  <div class="content">
   
    <div class="row g-6 py-2">

      @foreach ($values as $value )
        <div class="col-md-4 py-2">
          <a class="options-container push text-white rounded overflow-hidden" >
            <img class="img-fluid options-item" src="{{ $value->image_url }}" alt="{{ $value->head }}">
            
          </a>
          <h4 class="fw-bold mb-2">
          {{ $value->head }}
          </h4>
          <p class="fw-medium text-muted">
            {{ $value->content }}
          </p>
        </div>
        @endforeach
  
      {{-- <div class="col-md-6 col-xl-4">
        <!-- Story #11 -->
        <a class="block block-rounded block-link-pop d-flex flex-column h-100 mb-0" href="javascript:void(0)">
          <div class="block-content block-content-full bg-flat flex-grow-0" style="height: 180px;">
            <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
              Tutorial
            </span>
            <h3 class="h2 text-white-75 text-center mt-4">Vue.js</h3>
          </div>
          <div class="block-content flex-grow-1">
            <h5 class="mb-1">
              How to structure your Vue.js based app
            </h5>
            <p class="fw-medium fs-sm text-muted">
              Betty Kelley · 29 min
            </p>
          </div>
          <div class="block-content py-3 bg-body-light flex-grow-0">
            <div class="row g-0 fs-sm text-center">
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="far fa-fw fa-eye opacity-50 me-1"></i> 3.7k
                </span>
              </div>
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 87
                </span>
              </div>
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 36
                </span>
              </div>
            </div>
          </div>
        </a>
        <!-- END Story #11 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #12 -->
        <a class="block block-rounded block-link-pop d-flex flex-column h-100 mb-0" href="javascript:void(0)">
          <div class="block-content block-content-full bg-earth flex-grow-0" style="height: 180px;">
            <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
              Tutorial
            </span>
            <h3 class="h2 text-white-75 text-center mt-4">Angular</h3>
          </div>
          <div class="block-content flex-grow-1">
            <h5 class="mb-1">
              Getting started with Google’s JS framework
            </h5>
            <p class="fw-medium fs-sm text-muted">
              Marie Duncan · 14 min
            </p>
          </div>
          <div class="block-content py-3 bg-body-light flex-grow-0">
            <div class="row g-0 fs-sm text-center">
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="far fa-fw fa-eye opacity-50 me-1"></i> 4.9k
                </span>
              </div>
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 150
                </span>
              </div>
              <div class="col-4">
                <span class="text-muted fw-semibold">
                  <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 63
                </span>
              </div>
            </div>
          </div>
        </a>
        <!-- END Story #12 -->
      </div> --}}
    </div>
  </div>
  <!-- END Blog and Sidebar -->

</main>

@endsection
