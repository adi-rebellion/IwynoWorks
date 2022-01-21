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

  <!-- Inspiring Quotes -->
  <div class="bg-body-dark">
    <div class="content content-full text-center">
      <div class="py-4">
        <!-- Quotes Slider (.js-slider class is initialized in Helpers.jqSlick()) -->
        <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
        <div class="js-slider slick-nav-black js-slider-enabled slick-initialized slick-slider" data-autoplay="true" data-autoplay-speed="6000">
          <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 8428px; transform: translate3d(-3612px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Life is really simple, but we insist on making it complicated ”</div>
            <div class="h4 fw-normal text-muted">Confucius</div>
          </div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Strive not to be a success, but rather to be of value ”</div>
            <div class="h4 fw-normal text-muted">Albert Einstein</div>
          </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Success is where preparation and opportunity meet ”</div>
            <div class="h4 fw-normal text-muted">Bobby Unser</div>
          </div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Life is really simple, but we insist on making it complicated ”</div>
            <div class="h4 fw-normal text-muted">Confucius</div>
          </div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Strive not to be a success, but rather to be of value ”</div>
            <div class="h4 fw-normal text-muted">Albert Einstein</div>
          </div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Success is where preparation and opportunity meet ”</div>
            <div class="h4 fw-normal text-muted">Bobby Unser</div>
          </div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 1204px;">
            <div class="h3 fw-bold mb-2">“ Life is really simple, but we insist on making it complicated ”</div>
            <div class="h4 fw-normal text-muted">Confucius</div>
          </div></div></div>
          
          
        </div>
        <!-- END Quotes Slider -->
      </div>
    </div>
  </div>
  <!-- END Inspiring Quotes -->
</main>


@endsection
