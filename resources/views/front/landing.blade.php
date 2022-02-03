@extends('front.layout')

@section('main-container')
   <!-- Main Container -->
   <main id="main-container">
    <!-- Call to Action -->
   
    <!-- END Call to Action -->
    <!-- Hero -->
    <div class="bg-body-extra-light hero-bubbles">
      <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 20%; left: 10%;"></span>
      <span class="hero-bubble bg-success" style="top: 20%; left: 80%;"></span>
      <span class="hero-bubble hero-bubble-sm iwyno-brown" style="top: 40%; left: 25%;"></span>
      <span class="hero-bubble hero-bubble-lg iwyno-orange" style="top: 10%; left: 20%;"></span>
      <span class="hero-bubble hero-bubble-lg iwyno-shine-orange" style="top: 30%; left: 90%;"></span>
      <span class="hero-bubble hero-bubble-lg bg-danger" style="top: 35%; left: 20%;"></span>
      <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 60%; left: 35%;"></span>
      <span class="hero-bubble bg-info" style="top: 60%; left: 80%;"></span>
      <span class="hero-bubble hero-bubble-lg bg-flat" style="top: 75%; left: 70%;"></span>
      <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 75%; left: 10%;"></span>
      <span class="hero-bubble bg-elegance" style="top: 90%; left: 90%;"></span>
      <div class="bg-body-extra-light">
        <div class="content content-full text-center overflow-hidden">
          <div class="py-7">
            <a class=" mb-2 py-3 px-4" href="#">
              <img class="img-fluid options-item" src="{{ asset('public/logo/iwyno.png') }}" alt="Dashboard Default" width="300" height="300">
        
            </a>  
            <h2 class="fw-bold mb-2">
              our people use technology to solve <span style="color:#C55A1D">big </span><span style="color: #595959;">problems</span>
            </h2>
            <h3 class="h5 fw-medium text-muted mb-5">
              Technology has and will continue to make our life better. Since the advent of the internet, technology has evolved how we work, live and play in more ways than anyone had imagined. 
               As with any large experiment, mistakes happen along the way. This is why we believe in leveraging the collective knowledge of our people to to guide technology in directions that cause fewer mistakes and better outcomes. 
              We're committed to a better future for all.
            </h3>
            <h3 class="h5 fw-medium text-muted mb-5">
              We're a team of curious learners distributed across the globe. Our network includes experts in technology, medicine, finance, law and various other fieids.
               And we're always looking to add bright people to our team
            </h3>
            <h3 class="h5 fw-medium text-muted mb-5">
              Want to make a difference in the world? You are someone we would like to know. Lets see what problem we could solve by working together. Tap here to <a href={{ route('iwyno_contact') }}>contact us</a>
            </h3>
            <!-- <a class="btn btn-lg btn-alt-success mb-2 py-3 px-4" href="https://1.envato.market/95j">
              <i class="fa fa-shopping-bag opacity-50 me-2"></i> Purchase iwynoworks
            </a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Key Features -->
    <div class="position-relative bg-body-extra-light">
      <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light skew-y-1"></div>
      <div class="position-relative">
        <div class="content content-full">
          <div class="row g-0 justify-content-center text-center py-5">
            <div class="col-xl-4">
              <a href="{{ route('iwyno_software_development') }}">
              <div class="w-100 py-4">
                <div class="d-inline-block bg-body-extra-light rounded p-1 mb-4">
                  <div class="d-inline-block iwyno-shine-orange rounded p-4">
                    <img src="{{ asset('public/animation/dev.gif') }}"/>
                  </div>
                </div>
                <h3 class="h4 fw-bold mb-1">
                  Software development
                </h3>
                <p class="fw-medium text-muted mb-0">
                  We’re a team of technology and security enthusiasts who enjoy solving  problems with software. We’re firm believers in innovation.
                </p>
              </div>
              </a>
            </div>
            <div class="col-xl-4">
              <a href="{{ route('iwyno_contact') }}">
              <div class="w-100 py-4">
                <div class="d-inline-block bg-body-extra-light rounded p-1 mb-4">
                  <div class="d-inline-block iwyno-brown rounded p-4">
                    <img src="{{ asset('public/animation/inno.gif') }}"/>
                  </div>
                </div>
                <h3 class="h4 fw-bold mb-1">
                  Invest in innovation
                </h3>
                <p class="fw-medium text-muted mb-0">
                  We invest in our team, in new technologies and every so often when we discover a good business we partner with or invest in them. We believe - change is the only constant.
                </p>
              </div>
              </a>
            </div>
            <div class="col-xl-4">
              <a href="{{ route('iwyno_company',['company' => 'fin']) }}">
              <div class="w-100 py-4">
                <div class="d-inline-block bg-body-extra-light rounded p-1 mb-4">
                  <div class="d-inline-block iwyno-orange  rounded p-4">
                    <img src="{{ asset('public/animation/expert.gif') }}" style="height: 190px;"/>
                  </div>
                </div>
                <h3 class="h4 fw-bold mb-1">
                  Expertise on hand
                </h3>
                <p class="fw-medium text-muted mb-0">
                  We tap into our network for  expertise, consultation, independent contracting and more.  We invite you to bring your expertise to our initiatives by joining F.I.N.
                </p>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Key Features -->
    
    <!-- Unlimited Dashboards -->
    <div class="bg-body-extra-light">
      <div class="content content-full">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <!-- <span class="text-back">01</span> -->
            <h2 class="fw-bold mb-2 text-center">
              Initiatives <span  style="color:#C55A1D"s>we're a part of </span>
            </h2>
            
          </div>
          <div class="row g-5 py-2">
            @foreach ($companies as $company)
            <div class="col-md-3 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="{{ route('iwyno_company',['company' => $company->seo_name]) }}" >
                <img class="img-fluid options-item" src="{{ asset($company->image_url) }}" alt="{{ $company->name }}" >
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
               {{ $company->name }}
              </h4>
              <!-- <p class="fw-medium text-muted">
                iwynoworks’s original dashboard design provides a clean, modern and minimal starting point for your web application.
              </p> -->
            </div>
            @endforeach
           
            {{-- <div class="col-md-4 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="readbetter.html" target="_blank">
                <img class="img-fluid options-item" src="logo/readbetter.png" alt="Dashboard Classic">
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
                The ReadBetter Co
              </h4>
              <!-- <p class="fw-medium text-muted">
                A classic and well tested approach for a project which is going to handle much data and needs all the space it can get.
              </p> -->
            </div>
            <div class="col-md-4 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="db_clean.html" target="_blank">
                <img class="img-fluid options-item" src="logo/fin.png" alt="Dashboard Clean">
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
                F.I.N
              </h4>
              <!-- <p class="fw-medium text-muted">
                Clean and modern dashboard which enables you to create rich content and user driven experiences.
              </p> -->
            </div>
            <div class="col-md-4 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="servicebridge.html" target="_blank">
                <img class="img-fluid options-item" src="logo/TSB.png" alt="Dashboard Social">
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
                The Service Bridge
              </h4>
              <!-- <p class="fw-medium text-muted">
                Building a social dashboard shouldn’t be hard. It should be easy, so you could spend more time building your app.
              </p> -->
            </div>
            <div class="col-md-4 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="connectchief.html" target="_blank">
                <img class="img-fluid options-item" src="logo/connect.png" alt="Dashboard Corporate" >
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
                Connect Chief
              </h4>
              <!-- <p class="fw-medium text-muted">
                Corporate dashboard design that is modern, clean and provokes the credibility you want for your business.
              </p> -->
            </div>
            <div class="col-md-4 py-2">
              <a class="options-container push text-white rounded overflow-hidden" href="hiringco.html" target="_blank">
                <img class="img-fluid options-item" src="logo/hiring.png" alt="Dashboard Minimal">
                <div class="options-overlay bg-black-50">
                  <div class="options-overlay-content h5 fw-bold text-uppercase">
                    <i class="fa fa-link fa-2x"></i>
                  </div>
                </div>
              </a>
              <h4 class="fw-bold mb-2 text-center">
                The Hiring Co
              </h4>
              <!-- <p class="fw-medium text-muted">
                Super minimal design for you that you value simplicity and would like to incorporate into in your projects.
              </p> -->
            </div> --}}
           
          </div>
          <!-- <div class="text-center">
            <a class="btn btn-alt-secondary" href="be_pages_dashboard4.html" target="_blank">
              <i class="fa fa-rocket opacity-50 me-1"></i> Explore More Dashboards
            </a>
          </div> -->
        </div>
      </div>
    </div>
    <!-- END Unlimited Dashboards -->

    <!-- Page Packs -->
    <!-- <div class="position-relative bg-body-extra-light">
      <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light -skew-y-1"></div>
      <div class="position-relative">
        <div class="content content-full">
          <div class="pt-7 pb-5">
            <div class="position-relative">
              <span class="text-back">02</span>
              <h2 class="fw-bold text-center mb-2">
                Page <span class="text-primary">Packs</span>
              </h2>
              <h3 class="h4 fw-medium text-muted text-center mb-5">
                Just a glimpse of the ready made pages included to rocket start your project.
              </h3>
            </div>
            <div class="row g-5 py-2">
              <div class="col-md-4 py-2">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_crypto_dashboard.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-crypto.png" alt="Page Pack Crypto">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  Crypto
                </h4>
                <p class="fw-medium text-muted">
                  Cryptocurrency exchange pages for your blockchain project.
                </p>
              </div>
              <div class="col-md-4 py-2">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_ecom_dashboard.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-ecommerce.png" alt="Page Pack e-Commerce">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  e-Commerce
                </h4>
                <p class="fw-medium text-muted">
                  Products and sales management pages for your e-commerce dashboards.
                </p>
              </div>
              <div class="col-md-4 py-2">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_elearning_courses.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-elearning.png" alt="Page Pack e-Learning">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  e-Learning
                </h4>
                <p class="fw-medium text-muted">
                  Start building your e-learning platform easily with the included pages.
                </p>
              </div>
              <div class="col-md-4 py-2">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_forum_categories.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-forum.png" alt="Page Pack Forum">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  Forum
                </h4>
                <p class="fw-medium text-muted">
                  Perfect if you are building a community or support section in your app.
                </p>
              </div>
              <div class="col-md-4 py-2">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_auth_all.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-auth.png" alt="Page Pack Authentication">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  Authentication
                </h4>
                <p class="fw-medium text-muted">
                  Tons of options to meet every possible need when designing your authentication sections.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <a class="options-container push text-white rounded overflow-hidden" href="be_pages_error_all.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-error.png" alt="Page Pack Error">
                  <div class="options-overlay bg-black-50">
                    <div class="options-overlay-content h5 fw-bold text-uppercase">
                      <i class="fa fa-link fa-2x"></i>
                    </div>
                  </div>
                </a>
                <h4 class="fw-bold mb-2">
                  Error
                </h4>
                <p class="fw-medium text-muted">
                  Clean error pages to incorporate in case of a server or an app failure.
                </p>
              </div>
            </div>
            <div class="text-center">
              <a class="btn btn-alt-secondary" href="be_pages_generic_todo.html" target="_blank">
                <i class="fa fa-rocket opacity-50 me-1"></i> Explore More Pages
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Page Packs -->

    <!-- Feature: Powerful Layout -->
    <!-- <div class="bg-body-extra-light">
      <div class="content">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <span class="text-back">03</span>
            <h2 class="fw-bold text-center mb-2">
              Powerful <span class="text-primary">Layout</span>
            </h2>
            <h3 class="h4 fw-medium text-muted text-center mb-5">
              One super flexible and reusable layout.
            </h3>
          </div>
          <div class="row g-6 py-2">
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="far fa-circle text-elegance me-1"></i>
                Unity
              </h4>
              <p class="fw-medium text-muted mb-0">
                iwynoworks’s layout is really unique, adaptive and flexible. It enables you to create all kinds of pages that look great and work seamlessly across mobile and desktop devices.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-sync text-earth me-1"></i>
                Reusability
              </h4>
              <p class="fw-medium text-muted mb-0">
                It is the core principle we followed to create a layout that can work for different purposes with the minimum cost. That means fast and responsive layouts with limitless possibilities.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-bolt text-danger me-1"></i>
                Flexibility
              </h4>
              <p class="fw-medium text-muted mb-0">
                It is based on various layout & UI components which work together harmoniously to help you create what you imagine. Lots of boilerplate pages to help you started are included.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-0 pull-b text-center overflow-hidden">
          <div class="col-4">
            <a class="options-container" href="be_pages_dashboard.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-backend.png" alt="Backend Promo">
              <div class="options-overlay bg-body-extra-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Backend</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="options-container" href="db_classic.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-classic-dashboard.png" alt="Classic Dashboard Promo">
              <div class="options-overlay bg-body-extra-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Classic Dashboard</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="options-container" href="be_layout_api.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-api.png" alt="Layout API Promo">
              <div class="options-overlay bg-body-extra-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Layout</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Feature: Powerful Layout -->

    <!-- Feature: Bootstrap 5 -->
    <!-- <div class="bg-body-light">
      <div class="content content-full">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <span class="text-back">04</span>
            <h2 class="fw-bold text-center mb-2">
              Bootstrap <span class="text-primary">5</span>
            </h2>
            <h3 class="h4 fw-medium text-muted text-center mb-5">
              Based on the most popular HTML, CSS, and JS framework.
            </h3>
          </div>
          <div class="row g-6 py-2">
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-leaf text-success me-1"></i>
                Fresh
              </h4>
              <p class="fw-medium text-muted mb-0">
                Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-rocket text-corporate me-1"></i>
                Features
              </h4>
              <p class="fw-medium text-muted mb-0">
                Featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-code text-warning me-1"></i>
                No jQuery
              </h4>
              <p class="fw-medium text-muted mb-0">
                Bootstrap 5 and iwynoworks are designed to be used without jQuery. It is only used for providing examples of popular plugins which are based on it.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-0 pull-b text-center overflow-hidden">
          <div class="col-4">
            <a class="options-container" href="be_ui_grid.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-grid.png" alt="Bootstrap 5 Grid Promo">
              <div class="options-overlay bg-body-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Grid</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="options-container" href="be_ui_typography.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-typography.png" alt="Bootstrap 5 Typography Promo">
              <div class="options-overlay bg-body-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Typography</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="options-container" href="be_ui_buttons.html" target="_blank">
              <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-buttons.png" alt="Bootstrap 5 Buttons Promo">
              <div class="options-overlay bg-body-light">
                <div class="options-overlay-content">
                  <h3 class="h5 fw-bold text-uppercase mb-1">
                    Explore <span class="text-primary">Buttons</span>
                  </h3>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Feature: Bootstrap 5 -->

    <!-- Feature: Smart Tools -->
    <!-- <div class="bg-body-extra-light">
      <div class="content content-full">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <span class="text-back">05</span>
            <h2 class="fw-bold text-center mb-2">
              Smart <span class="text-primary">Tools</span>
            </h2>
            <h3 class="h4 fw-medium text-muted text-center mb-5">
              Make your life easier and work more efficiently.
            </h3>
          </div>
          <div class="row g-6 py-2">
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i  class="fa fa-cogs text-elegance me-1"></i>
                Preprocessor
              </h4>
              <p class="fw-medium text-muted mb-0">
                iwynoworks CSS framework was built with Sass following a completely modular approach. It is easy to understand, customize and extend to fulfill your needs or project’s requirements.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i  class="fa fa-terminal text-info me-1"></i>
                Live Tasks
              </h4>
              <p class="fw-medium text-muted mb-0">
                Smart tasks will serve your project, auto refresh on file changes, live compile your ES6 to ES5 and Sass to CSS while you work (also auto adding any required browser prefixes).
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i  class="far fa-dot-circle text-danger me-1"></i>
                Build
              </h4>
              <p class="fw-medium text-muted mb-0">
                Time-saving task that will build a custom, minimized and production ready iwynoworks framework for you. Create your own variation based on your project.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-0 justify-content-center pull-b text-center overflow-hidden">
          <div class="col-sm-6">
            <img class="img-fluid" src="assets/media/various/landing-promo-smart-tools.png" alt="Smart Tools Promo">
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Feature: Smart Tools -->

    <!-- Feature: Developer Minded -->
    <!-- <div class="bg-body-light">
      <div class="content content-full">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <span class="text-back">06</span>
            <h2 class="fw-bold text-center mb-2">
              Developer <span class="text-primary">Minded</span>
            </h2>
            <h3 class="h4 fw-medium text-muted text-center mb-5">
              We built iwynoworks based on your valuable feedback.
            </h3>
          </div>
          <div class="row g-6  py-2">
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-bullhorn text-danger me-1"></i>
                Feedback
              </h4>
              <p class="fw-medium text-muted mb-0">
                We get to know you better by continuously listening to your feedback. This way, we learn where to focus our efforts and build/improve quality products to better match your needs.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-book text-info me-1"></i>
                Documentation
              </h4>
              <p class="fw-medium text-muted mb-0">
                In the package, you will find the iwynoworks Docs which can become a valuable tool in getting familiar with the overall structure and helping you start your project faster.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-code text-elegance me-1"></i>
                Clean Code
              </h4>
              <p class="fw-medium text-muted mb-0">
                Working with someone else’s code can become uncomfortable and make you unproductive. We strive to ensure that your experience with iwynoworks will be the exact opposite.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-0 pull-b text-center overflow-hidden">
          <div class="col-4">
            <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-php.png" alt="Developer Minded PHP Promo">
          </div>
          <div class="col-4">
            <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-docs.png" alt="Developer Minded Docs Promo">
          </div>
          <div class="col-4">
            <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-html.png" alt="Developer Minded HTML Promo">
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Feature: Developer Minded -->

    <!-- Feature: Handcrafted Design -->
    <!-- <div class="bg-body-extra-light">
      <div class="content content-full">
        <div class="pt-7 pb-5">
          <div class="position-relative">
            <span class="text-back">07</span>
            <h2 class="fw-bold text-center mb-2">
              Handcrafted <span class="text-primary">Design</span>
            </h2>
            <h3 class="h4 fw-medium text-muted text-center mb-5">
              It’s not only about quantity, it’s about quality first and foremost.
            </h3>
          </div>
          <div class="row g-6 py-2">
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-heart text-pulse me-1"></i>
                Passion
              </h4>
              <p class="fw-medium text-muted mb-0">
                We are passionate with what we do and love crafting products that can make your life easier and help you succeed. We pay attention to small details and always aiming for the best.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="fa fa-compress text-corporate me-1"></i>
                Commitment
              </h4>
              <p class="fw-medium text-muted mb-0">
                We are committed to our work and stand by our projects. Our aim is to improve them in every update and offer the most full-featured packages with the smallest possible footprint.
              </p>
            </div>
            <div class="col-md-4 py-3">
              <h4 class="fw-bold mb-2">
                <i class="far fa-circle text-gray me-1"></i>
                Less is More
              </h4>
              <p class="fw-medium text-muted mb-0">
                We believe that design should be invisible and enhance the user experience, not get in the way. This gives room for your content to breath and attracts your users’ attention to the right place.
              </p>
            </div>
          </div>
        </div>
        <div class="row text-center push">
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-pulse-lighter mb-3">
              <i class="si si-heart text-pulse"></i>
            </div>
            <div class="fw-semibold">Passion</div>
          </div>
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-elegance-lighter mb-3">
              <i class="si si-chemistry text-elegance"></i>
            </div>
            <div class="fw-semibold">Creativity</div>
          </div>
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-default-lighter mb-3">
              <i class="si si-vector text-default"></i>
            </div>
            <div class="fw-semibold">Design</div>
          </div>
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-warning-light mb-3">
              <i class="si si-badge text-warning"></i>
            </div>
            <div class="fw-semibold">Quality</div>
          </div>
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-pulse-lighter mb-3">
              <i class="si si-energy text-pulse"></i>
            </div>
            <div class="fw-semibold">Simplicity</div>
          </div>
          <div class="col-4 col-md-2 py-4">
            <div class="item item-circle mx-auto bg-success-light mb-3">
              <i class="si si-compass text-success"></i>
            </div>
            <div class="fw-semibold">Motivation</div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Feature: Handcrafted Design -->

    <!-- Features -->
    <!-- <div class="position-relative bg-body-extra-light">
      <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light -skew-y-1"></div>
      <div class="position-relative">
        <div class="content content-full">
          <div class="pt-7 pb-5">
            <div class="position-relative">
              <span class="text-back">Explore it</span>
              <h2 class="fw-bold text-center mb-2">
                Feature <span class="text-primary">Rich</span>
              </h2>
              <h3 class="h4 fw-medium text-muted text-center mb-5">
                Extra care and thought were put into each and every one.
              </h3>
            </div>
            <div class="row g-4 py-2">
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  HTML5 &amp; CSS3
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Using the latest technologies, following the best practices. W3C valid code.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Fully Responsive
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  User Interface auto adjusts and looks great to any screen size.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Retina Ready
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  User Interface looks crispy clear on high resolution screens.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Cross Browser Support
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  It plays nice with all modern browsers including Chrome, Edge, Firefox, Opera and Safari.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Fast &amp; Lightweight
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  It is created to be as fast and lightweight as possible. You can use only what you need.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Custom JS APIs
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Powerful JavaScript APIs are included. Layout or blocks manipulation is just a JS call away.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Get Started Pages
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Simple empty boilerplate pages to help you rocket start your project.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  HTML Version
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  The generic and abstract version which can be used with any framework or language.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  PHP Version
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  A PHP version is included to assist you with your custom PHP project.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  RTL Support
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Boilerplate RTL pages are also included in 'Get Started' section providing a great starting point.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Components
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Carefully picked and integrated to enhance and enrich your project with great functionality.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  6 Inspiring Color Themes
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Carefully chosen and integrated color themes to choose from for your website/dashboard.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  1100+ Font Based Icons
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  With so many unique icons included in iwynoworks, you don’t have to worry about running out.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Super-Fast UI
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  GPU powered sidebar animations and smart CSS styles will ensure a great experience.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Flexible Side Areas
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Multiple available layouts and completely adjustable by using the powerful layout API.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Designed Pages
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  All kinds of pages, carefully designed, to get inspired and create your own.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Gulp Tasks
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Time-saving tasks that will be a valuable tool to your workflow.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Easy Updating
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  Updating a template can be hard but if you follow the instructions you will be just a copy-paste away.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Free Updates
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  All updates are free for existing customers to download. Great new features at no extra cost.
                </p>
              </div>
              <div class="col-md-4 py-3">
                <h4 class="h5 fw-bold mb-2">
                  Support
                </h4>
                <p class="fs-sm fw-medium text-muted mb-0">
                  By purchasing a license, you are eligible to email support. We are here to help!
                </p>
              </div>
              <div class="col-md-4 py-3 text-center text-md-start">
                <h4 class="h5 fw-bold mb-2">
                  Many Many More..
                </h4>
                <a class="btn btn-sm btn-alt-primary" href="be_pages_dashboard.html" target="_blank">
                  <i class="fa fa-external-link-square-alt opacity-50 me-1"></i> Explore iwynoworks
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END Features -->

    

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
      <div class="content py-5">
        <div class="row fs-sm">
          <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
            Crafted with <img src="https://img.icons8.com/ios-glyphs/20/4D2D19/like--v1.png"/> by <a class="fw-semibold" href="#" target="_blank">iwynoworks</a>
          </div>
          <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
            <a class="fw-semibold" href="#" target="_blank">iwynoworks</a> &copy; <span data-toggle="year-copy"></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->
  </main>
  <!-- END Main Container -->

@endsection
