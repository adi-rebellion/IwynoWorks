@extends('front.layout')

@section('main-container')

<main id="main-container">
    <br>
  <div class="content">
      <h2 class="content-heading">    </h2>
      <div class="block block-rounded overflow-hidden">
        <!-- Navigation -->
        <div class="block-content block-content-full border-bottom d-flex justify-content-between align-items-center">
          <a class="btn btn-primary" href="{{ route('root') }}">
            Back
          </a>
         
        </div>
        <!-- END Navigation -->

        <!-- Project -->
        <div class="block-content block-content-full">
          <div class="row py-3">
            <div class="col-sm-6 text-center">
              <img class="img-fluid options-item" src="{{ $company->image_url }}" alt="Dashboard Default" style="margin-top: 175px;">
              
              <!-- END Project Info -->
            </div>
            <div class="col-sm-6">
              <!-- Project Description -->
              <h3 class="mb-2">{{ $company->one_liner }}</h3>
              <p>{!! $company->description !!}</p>
              
              
              <!-- END Project Description -->
            </div>
          </div>
        </div>
        <!-- END Project -->

       

      
      </div>
    </div>
  

  <!-- Footer -->
  <footer id="page-footer" class="bg-body-light">
    <div class="content py-5">
      <div class="row fs-sm">
        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
          Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">iwynoworks</a>
        </div>
        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
          <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">IwynoWorks 5.0</a> &copy; <span data-toggle="year-copy"></span>
        </div>
      </div>
    </div>
  </footer>
  <!-- END Footer -->
</main>


@endsection
