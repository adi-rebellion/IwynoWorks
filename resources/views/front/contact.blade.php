@extends('front.layout')

@section('main-container')

<main id="main-container">
    <!-- Hero -->
    <div style="background-color: #2D2D2D">
      <div class="bg-black-25">
        <div class="content content-top text-center">
          <div class="py-5">
            <h1 class="fw-bold text-white mb-2">Get In Touch</h1>
            <h2 class="h4 fw-normal text-white-75">Do you have any questions?</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Contact Form -->
    <!-- Contact Form Validation functionality is initialized in js/pages/be_pages_generic_contact.min.js which was auto compiled from _js/pages/be_pages_generic_contact.js -->
    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <div class="content content-full">
      <div class="row justify-content-center py-4">
        <div class="col-lg-8 col-xl-6">
          <form class="js-validation-be-contact" action="be_pages_generic_contact.html" method="POST" novalidate="novalidate">
            <div class="mb-4">
              <label class="form-label" for="be-contact-name">Name</label>
              <input type="text" class="form-control form-control-lg" id="be-contact-name" name="be-contact-name" placeholder="Enter your name..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="be-contact-email">Company</label>
              <input type="email" class="form-control form-control-lg" id="be-contact-email" name="be-contact-email" placeholder="Enter your email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="be-contact-subject">Location</label>
              <input type="text" class="form-control form-control-lg" id="location" name="be-contact-email" placeholder="Enter your email.." readonly>
            </div>
            <div class="mb-4">
                <label class="form-label" for="be-contact-email">Email</label>
                <input type="email" class="form-control form-control-lg" id="be-contact-email" name="be-contact-email" placeholder="Enter your email..">
              </div>
            <div class="mb-4">
              <label class="form-label" for="be-contact-message">Message</label>
              <textarea class="form-control form-control-lg" id="be-contact-message" name="be-contact-message" rows="10" placeholder="Enter your message.."></textarea>
            </div>
            <div class="form-group mt-4 mb-4">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>

            <div class="form-group mb-4">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">
                <i class="fa fa-paper-plane opacity-50 me-1"></i> Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Contact Form -->
  </main>

  
@endsection
