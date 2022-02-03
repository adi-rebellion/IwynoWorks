@extends('front.layout')

@section('main-container')
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
<main id="main-container">
    <br>
    <input type="hidden" name="csrf_token" id="csrf_token" value={{ csrf_token() }}>
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
              <img class="img-fluid options-item" src="{{ asset($company->image_url) }}" alt="{{ $company->name }}" >
              
              <!-- END Project Info -->
            </div>
            <div class="col-sm-6">
              <!-- Project Description -->
              <?php
              $description = str_replace(PHP_EOL,"<br>",$company->description)
                  ?>
              <h3 class="mb-2">{{ $company->one_liner }}</h3>
              <p>{!! $description !!}</p>
              
              
              <!-- END Project Description -->
            </div>
          </div>
        </div>
        <!-- END Project -->
        

       

      
      </div>
      <?php 
      if($company->id == 6)
      {
        ?>
      <div class="col-xl-12">
        <!-- Floating Labels Contact -->
        <div class="block block-rounded h-100 mb-0">
          <div class="block-header block-header-default">
            <h1 class="block-title text-center" style="font-size: 35px;font-weight: bolder">Join our F.I.N initiative</h1>
         
          </div>
       


          <div class="block-content">
            <form action="be_forms_premade.html" method="POST" onsubmit="return false;">
              <div class="mb-4">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_name" name="fin_name" placeholder="Enter your name">
                    <label class="form-label" for="fin_name" style="font-weight: bolder">Name</label>
                  </div>
                </div>
                
              </div>
              <div class="mb-4">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_linkedin" name="fin_linkedin" placeholder="Enter your name">
                    <label class="form-label" for="fin_linkedin" style="font-weight: bolder">URL to your Linkedin profile</label>
                  </div>
                </div>
                
              </div>
              <div class="mb-4">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_user_summary" name="fin_user_summary" placeholder="Enter your name">
                    <label class="form-label" for="fin_user_summary" style="font-weight: bolder">Who are you? (1 line summary highlighting your strengths)</label>
                  </div>
                </div>
                
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-select" id="fin_user_country" name="fin_user_country" size="1" placeholder="Enter your subject">

                      <?php
                       $GlobalService = new GlobalService;
                       $countries = $GlobalService->fetch_iwyno_country();

                      ?>
                       <option value="">Please select country</option>
                      @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                      @endforeach
                     
                    </select>
                    <label class="form-label" for="contact2-subject" style="font-weight: bolder">Country?</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-select" id="fin_user_city" name="fin_user_city" size="1" placeholder="Enter your subject">
                      <option value="">Please select city</option>
                    </select>
                    <label class="form-label" for="contact2-subject" style="font-weight: bolder">City?</label>
                  </div>
                </div>
              </div>
             
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="email" class="form-control" id="fin_email" name="fin_email" placeholder="Enter your email">
                  <label class="form-label" for="fin_email" style="font-weight: bolder">Your email    ( no we do not spam ) </label>
                  <span class="input-group-text">
                    <img src="{{ asset('public/animation/email.gif') }}" height="20"/>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="tel" class="form-control" id="fin_phone" name="fin_phone" placeholder="Enter your email">
                  <label class="form-label" for="fin_phone" style="font-weight: bolder">Phone  (just make sure you keep this current) </label>
                  <span class="input-group-text">
                    <img src="{{ asset('public/animation/phone.gif') }}" height="20"/>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="email" class="form-control" id="fin_user_link_tree" name="fin_user_link_tree" placeholder="Enter your email">
                  <label class="form-label" for="fin_user_link_tree" style="font-weight: bolder">Your Link.tree </label>
                  <span class="input-group-text">
                    <img src="{{ asset('public/animation/link.gif') }}" height="20"/>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-floating ">
                  {{-- <select class="form-select select_multiple_skills" name="states[]" multiple="multiple">
                    <option value="AL">Alabama</option>
                      ...
                    <option value="WY">Wyoming</option>
                  </select>
                 --}}
                 <select id='select_multiple_skills'  name="select_multiple_skills"  
                                        style="width: 100%;font-weight: bolder" data-placeholder="Your areas of expertise ..." multiple>
                                            <option value='0'>-- Select user --</option>
                                          </select>
                 
                </div>
              </div>
            
              <div class="mb-4">
                <div class="form-floating">
                  <textarea class="form-control" id="contact2-msg" name="contact2-msg" rows="7" placeholder="Enter your message"></textarea>
                  <label class="form-label" for="contact2-msg" style="font-weight: bolder">How can you add value to the FIN network</label>
                </div>
            
              </div>
              <div class="mb-4">
                <div class="form-floating">
                  <textarea class="form-control" id="contact2-msg" name="contact2-msg" rows="7" placeholder="Enter your message"></textarea>
                  <label class="form-label" for="contact2-msg" style="font-weight: bolder">How can FIN be of help to you</label>
                </div>
               
              </div>
              <div class="mb-4">
                <label class="form-label d-block" style="font-weight: bolder">Billing rate if we are to tap into you as an SME </label>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" id="mega-gender-group-female" name="mega-gender-group">
                  <label class="form-check-label" for="mega-gender-group-female">Currency</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" id="mega-gender-group-male" name="mega-gender-group">
                  <label class="form-check-label" for="mega-gender-group-male">Hourly rate</label>
                </div>
              </div>
              <div class="mb-4">
                
                <div class="space-y-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1" checked="">
                    <label class="form-check-label" for="example-checkbox-default1">check here to allow us to create a profile for you at The Hiring Co (learn more) 
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                    <label class="form-check-label" for="example-checkbox-default2">Nothing herein shall be deemed to create an employment, agency, joint venture or partnership relationship between you or us or any third party, or any other legal arrangement that would impose liability upon one Party for the act or failure to act of the other Party. By signing up, you agree that we are independent parties and that you specifically only sharing your information and are granting us permission to contact you should there be an opportunity where we or someone who contacts us may need to get in contact with you regarding your areas of expertise. 
                    </label>
                  </div>
                  
                </div>
              </div>
              <div class="mb-4">
                <button type="submit" class="btn btn-primary">
                  JOIN THE FIN Network
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Floating Labels Contact -->
      </div>

      <?php 

    }
    ?>
    </div>
  

  <!-- Footer -->
  <footer id="page-footer" class="bg-body-light">
    <div class="content py-5">
      <div class="row fs-sm">
        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
          Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="fw-semibold" href="#" target="_blank">iwynoworks</a>
        </div>
        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
          <a class="fw-semibold" href="#" target="_blank">iwynoworks</a> &copy; <span data-toggle="year-copy"></span>
        </div>
      </div>
    </div>
  </footer>
  <!-- END Footer -->
</main>
<script>
  var $config = {

  FetchIwynoSkill: "{{ route('fetch_iwyno_skill') }}",
  
}

</script>
{{-- <script>
  $(document).ready(function() {
    $('.select_multiple_skills').select2();
});
</script> --}}
<script type="text/javascript">
 
      // CSRF Token
      
      $(document).ready(function(){
      
        $( "#select_multiple_skills" ).select2({
          ajax: { 
            url: $config.FetchIwynoSkill ,
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function (params) {
              return {
                _token: $("[name='csrf_token']").val(),
                search: params.term // search term
              };
            },
            processResults: function (data) {
  var results = [];
  $.each(data, function (index, skill) {
  results.push({
      id: skill.id,
      text: skill.name
  });
  });
  
  return {
  results: results
  };
  },
            cache: true
          }
        
        });
      
      });


      $('#fin_user_country').on('change', function() {

        var country_id = $(this).val();
            if(country_id) {
                $.ajax({
                    url: 'fetch/city/'+country_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="fin_user_city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="fin_user_city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }











  
  $( "#select_multiple_skills" ).select2({
          ajax: { 
            url: $config.FetchIwynoSkill ,
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function (params) {
              return {
                _token: $("[name='csrf_token']").val(),
                search: params.term // search term
              };
            },
            processResults: function (data) {
  var results = [];
  $.each(data, function (index, skill) {
  results.push({
      id: skill.id,
      text: skill.name
  });
  });
  
  return {
  results: results
  };
  },
            cache: true
          }
        
        });
});

     
      </script>   

@endsection
