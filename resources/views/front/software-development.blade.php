@extends('front.layout')

@section('main-container')

<main id="main-container">
 
  <div class="bg-body-extra-light hero-bubbles">
    <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 20%; left: 10%;"></span>
    <span class="hero-bubble bg-success" style="top: 20%; left: 80%;"></span>
    <span class="hero-bubble hero-bubble-sm bg-corporate" style="top: 40%; left: 25%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 10%; left: 20%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-pulse" style="top: 30%; left: 90%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-danger" style="top: 35%; left: 20%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 60%; left: 35%;"></span>
    <span class="hero-bubble bg-info" style="top: 60%; left: 80%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-flat" style="top: 75%; left: 70%;"></span>
    <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 75%; left: 10%;"></span>
    <span class="hero-bubble bg-elegance" style="top: 90%; left: 90%;"></span>
    <div class="position-relative d-flex align-items-center">
      <div class="content content-full">
        <div class="row g-6 w-100 py-7 overflow-hidden">
          <div class="col-md-7 order-md-last py-4 d-md-flex align-items-md-center justify-content-md-end">
            <img class="img-fluid" src="{{ asset('public/logo/iwyno.png') }}" alt="iwynoworks" width="300" height="300">
          </div>
          <div class="col-md-5 py-4 d-flex align-items-center">
            <div class="text-center text-md-start">
              <h1 class="fw-bold fs-2 mb-3">
                What we do? 
              </h1>
              <p class="text-muted fw-medium mb-4">
                Our team of software developers & architects can develop highly customized software for your institution.Our team of innovators and entrepreneurs in residence can work with you through the entire process of  <span class="fw-semibold">brainstorming</span>, <span class="fw-semibold">conceiving ideas</span>,<span class="fw-semibold">creating proof of concepts</span>,<span class="fw-semibold">wireframes</span>,<span class="fw-semibold">building an MVP (Minimum viable product) </span> and <span class="fw-semibold"> helping you through your journey in turning your idea into a startup. 
                </span>.
              </p>
              <a class="btn iwyno-orange text-white py-2 px-2" href="{{ route('iwyno_service') }}" >
                Services
              </a>
              <a class="btn iwyno-orange text-white py-2 px-2" href="{{ route('iwyno_technology') }}" >
                Technologies 
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Blog and Sidebar -->
  <div class="content">
    <h1 class="fw-bold  mb-2 text-center">Why us  </h1>
    <br>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-6 col-xl-6">
          <a class="block block-rounded block-link-pop text-end" >
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
             
              <div style="margin-left:auto;margin-right:auto;">
                <div class="fs-3 fw-semibold">Over a century of industry experience</div>
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-xl-6">
          <a class="block block-rounded block-link-pop text-end" >
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
             
              <div style="margin-left:auto;margin-right:auto;">
                <div class="fs-3 fw-semibold">Free consultations </div>
              
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-xl-6">
          <a class="block block-rounded block-link-pop text-end" >
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
             
              <div style="margin-left:auto;margin-right:auto;">
                <div class="fs-3 fw-semibold">Our teams cover many time zones</div>
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-xl-6">
          <a class="block block-rounded block-link-pop text-end" >
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
              <div style="margin-left:auto;margin-right:auto;">
                <div class="fs-3 fw-semibold">Discretion & Confidentiality</div>
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-xl-6">
            <a class="block block-rounded block-link-pop text-end">
              <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
                <div style="margin-left:auto;margin-right:auto;">
                  <div class="fs-3 fw-semibold">Global reach, local presence</div>
                 
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-xl-6">
            <a class="block block-rounded block-link-pop text-end" >
              <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
                <div style="margin-left:auto;margin-right:auto;">
                  <div class="fs-3 fw-semibold">Experienced team with SMEs in many fields</div>
                 
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-xl-6">
            <a class="block block-rounded block-link-pop text-end" >
              <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
                <div style="margin-left:auto;margin-right:auto;">
                  <div class="fs-3 fw-semibold">Industry best practices
                </div>
                 
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-xl-6">
            <a class="block block-rounded block-link-pop text-end" >
              <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
                <div style="margin-left:auto;margin-right:auto;">
                  <div class="fs-3 fw-semibold">Flexible engagements </div>
                 
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-xl-6">
            <a class="block block-rounded block-link-pop text-end" >
              <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center border-black-op-b border-3">
               
                <div style="margin-left:auto;margin-right:auto;">
                  <div class="fs-3 fw-semibold ">100% transparency</div>
                 
                </div>
              </div>
            </a>
          </div>
        <!-- END Row #1 -->
      </div>

      
  
  
    </div>

  <!-- END Blog and Sidebar -->
  
  <div class="position-relative ">
   
    <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light skew-y-1"></div>
    
    <div class="position-relative">
      <div class="content content-full">
        <div class="row g-0 justify-content-center text-center py-5">
            <h1 class="fw-bold  mb-2 text-center">Our Development process</h1>
            <br>
          <div class="col-xl-3">
            <div class="w-100 py-4">
              <div class="d-inline-block iwyno-shine-orange rounded p-1 mb-4">
                <div class="d-inline-block iwyno-shine-orange rounded p-4">
                  <img src="https://img.icons8.com/ios/64/ffffff/science-application.png"/>
                </div>
              </div>
              <h3 class="h4 fw-bold mb-1">
                Research
              </h3>
              <p class="fw-medium text-muted mb-0">
                gather business requirements and client goals. Proper time invested upfront to devise a plan that trades-off costs, timelines and business objectives in close consultation with clients
              </p>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="w-100 py-4">
              <div class="d-inline-blockiwyno-shine-orange rounded p-1 mb-4">
                <div class="d-inline-block iwyno-shine-orange rounded p-4">
                  <img src="https://img.icons8.com/ios/64/ffffff/design--v1.png"/>
                </div>
              </div>
              <h3 class="h4 fw-bold mb-1">
                Design
              </h3>
              <p class="fw-medium text-muted mb-0">
                Create design proposals that maximize extensibility and scale for the project. UI/UX considerations put in at the design phase

              </p>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="w-100 py-4">
              <div class="d-inline-block iwyno-shine-orange rounded p-1 mb-4">
                <div class="d-inline-block iwyno-shine-orange rounded p-4">
                  <img src="https://img.icons8.com/ios/64/ffffff/development-skill.png"/>
                </div>
              </div>
              <h3 class="h4 fw-bold mb-1">
                Development
              </h3>
              <p class="fw-medium text-muted mb-0">
                Methodical development following industry best practices including rapid prototyping, source control access, weekly demos and continuous integration

              </p>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="w-100 py-4">
              <div class="d-inline-block iwyno-shine-orange rounded p-1 mb-4">
                <div class="d-inline-block iwyno-shine-orange rounded p-4">
                  <img src="https://img.icons8.com/ios/64/ffffff/support.png"/>
                </div>
              </div>
              <h3 class="h4 fw-bold mb-1">
                Support
              </h3>
              <p class="fw-medium text-muted mb-0">
                Ongoing maintenance and support post delivery

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


@endsection
