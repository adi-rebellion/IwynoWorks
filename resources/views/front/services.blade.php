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
    <div class="block block-rounded">
      <div class="block-content">
        <div class="py-3 text-justify">
          <h1 class="h3 mb-1">We are the leading choice for industry innovators who are looking to accelerate their business processes & outcomes. Our team brings to the table expertise in a variety of industry verticals by tapping into our global network of industry specialists and advisors. Deep industry knowledge coupled with the prowess of our software development & technology teams gives us the wherewithal to be able to tackle the most complex of industry challenges and come up with innovative technology solutions.

          </h1>
         
          <p class="fs-sm fw-medium">
            Moreso, our commitment to diversity and inclusion makes the iwyno thinkworks technology team
          </p>
        </div>
      </div>
    </div>
    <div class="row items-push">

      @foreach ($services as $service )
      <div class="col-md-6 col-xl-4">
        <a class="block block-rounded shadow-none iwyno-shine-orange" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="p-3">
              {!! $service->image_url !!} 
            </div>
            <div class="ms-1 text-end">
              <p class="fs-lg fw-semibold text-white mb-0">
               {{ $service->name }}
              </p>
              {{-- <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                Biography
              </p> --}}
            </div>
          </div>
        </a>
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
