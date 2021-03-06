@extends('front.layout')

@section('main-container')

<main id="main-container">
  <!-- Hero -->
  <div style="background-color: #2D2D2D">
    <div class="bg-black-25">
      <div class="content content-top text-center">
        <div class="py-5">
          <h1 class="fw-bold text-white mb-2">Technology solutions</h1>
          <h2 class="h4 fw-normal text-white-75">Our leadership team brings to bear over a 100 years of collective system architecture, product management, software design, product development, program management and technology experience. .</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Blog and Sidebar -->
  <div class="content">
  
    <div class="row items-push">

      
     
      <div class="row">
        @foreach ($technology as $tech )
        <!-- Row #5 -->
        <div class="col-md-6 col-xl-3">
          <a class="block block-rounded block-link-shadow" href="{{ route('iwyno_tech_page',['tech_name' => $tech->seo_tech]) }}">
            <div class="block-content block-content-full text-center">
              <div class="p-3 mb-2">
               {!! $tech->image_url !!}
              </div>
              <p class="fs-lg fw-semibold mb-0">
               {{ $tech->name }}
              </p>
              {{-- <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
                Steam
              </p> --}}
            </div>
          </a>
        </div>
        <!-- END Row #5 -->
        @endforeach
      </div>
         
     
      
  
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
              Betty Kelley ?? 29 min
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
              Getting started with Google???s JS framework
            </h5>
            <p class="fw-medium fs-sm text-muted">
              Marie Duncan ?? 14 min
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
