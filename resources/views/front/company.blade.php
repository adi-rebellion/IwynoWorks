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
      <div class="col-xl-8" style="margin-left: auto;margin-right:auto;" id="joinfin">
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
                    <label class="form-label" for="fin_name" style="font-weight: bolder">Name<sup class="text-danger">*</sup></label>
                  </div>
                </div>
                
              </div>
              <div class="mb-4">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_linkedin" name="fin_linkedin" placeholder="Enter your name" value="https://www.linkedin.com/in/">
                    <label class="form-label" for="fin_linkedin" style="font-weight: bolder">URL to your Linkedin profile<sup class="text-danger">*</sup></label>
                  </div>
                </div>
                
              </div>
              <div class="mb-4">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_user_summary" name="fin_user_summary" placeholder="Enter your name">
                    <label class="form-label" for="fin_user_summary" style="font-weight: bolder">Who are you? (One sentence highlighting your strengths)<sup class="text-danger">*</sup></label>
                  </div>
                </div>
                
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-select" id="fin_user_country" name="fin_user_country" size="1" >

                      <?php
                       $GlobalService = new GlobalService;
                       $countries = $GlobalService->fetch_iwyno_country();

                      ?>
                       <option value="">Please select country</option>
                      @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                      @endforeach
                     
                    </select>
                    <label class="form-label" for="contact2-subject" style="font-weight: bolder">Country<sup class="text-danger">*</sup></label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-select" id="fin_user_city" name="fin_user_city" size="1" >
                      <option value="">Please select city</option>
                    </select>
                    <label class="form-label" for="contact2-subject" style="font-weight: bolder">City<sup class="text-danger">*</sup></label>
                  </div>
                </div>
              </div>
             
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="email" class="form-control" id="fin_email" name="fin_email" placeholder="Enter your email">
                  <label class="form-label" for="fin_email" style="font-weight: bolder">Your email<sup class="text-danger">*</sup> (we hate spam)</label>
                  <span class="input-group-text">
                    <img src="{{ asset('public/animation/email.gif') }}" height="20"/>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="tel" class="form-control" id="fin_phone" name="fin_phone" placeholder="Enter your email">
                  <label class="form-label" for="fin_phone" style="font-weight: bolder">Phone<sup class="text-danger">*</sup> (be sure you keep this current) </label>
                  <span class="input-group-text">
                    <img src="{{ asset('public/animation/phone.gif') }}" height="20"/>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-floating input-group">
                  <input type="text" class="form-control" id="fin_user_link_tree" name="fin_user_link_tree" placeholder="Enter your email">
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
                 <label class="form-label" for="fin_user_link_tree" style="font-weight: bolder">Your areas of expertise (choose from list)</label>
                 <select id='select_multiple_skills'  name="fin_skills"  
                                        style="width: 100%;font-weight: bolder" data-placeholder="Your areas of expertise ..." multiple>
                                         
                                          </select>
                 
                </div>
              </div>
            
              <div class="mb-4">
                <div class="form-floating">
                  <textarea class="form-control" id="fin_value" name="fin_value" rows="7" placeholder="Enter your message"></textarea>
                  <label class="form-label" for="fin_value" style="font-weight: bolder">How can you add value to the FIN network?<sup class="text-danger">*</sup>
                    (250-500 characters)</label>
                </div>
            
              </div>
              <div class="mb-4">
                <div class="form-floating">
                  <textarea class="form-control" id="fin_help" name="fin_help" rows="7" placeholder="Enter your message"></textarea>
                  <label class="form-label" for="fin_help" style="font-weight: bolder">How can FIN be of help to you?<sup class="text-danger">*</sup>
                    (250-500 characters)</label>
                </div>
               
              </div>
              {{-- <div class="mb-4">
                <label class="form-label d-block" style="font-weight: bolder">Billing rate if we are to tap into you as an SME </label>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" id="mega-gender-group-female" name="mega-gender-group">
                  <label class="form-check-label" for="mega-gender-group-female">Currency</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" id="mega-gender-group-male" name="mega-gender-group">
                  <label class="form-check-label" for="mega-gender-group-male">Hourly rate</label>
                </div>
              </div> --}}
              <div class="row mb-4">
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-select" id="fin_user_currency" name="fin_user_currency" size="1" placeholder="Enter your subject">

                      <?php
                       $GlobalService = new GlobalService;
                       $countries = $GlobalService->fetch_iwyno_country();

                      ?>
                       <option value="">Please select currency</option>
                      @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->currency_symbol }}</option>
                      @endforeach
                     
                    </select>
                    <label class="form-label" for="contact2-subject" style="font-weight: bolder">Currency<sup class="text-danger">*</sup> 
                      </label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fin_user_hour_rate" name="fin_user_hour_rate" placeholder="Enter your name">
                    <label class="form-label" for="fin_user_hour_rate" style="font-weight: bolder">Hourly rate<sup class="text-danger">*</sup></label>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                
                <div class="space-y-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1" checked="">
                    <label class="form-check-label" for="example-checkbox-default1" style="font-size:10px;">check here to allow us to create a profile for you at The Hiring Co (learn more) 
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="terms_and_con" name="terms_and_con">
                    <label class="form-check-label" for="example-checkbox-default2" style="font-size:10px;"><sup class="text-danger">*</sup>By signing up, you are granting us permission to contact you should there be an opportunity where we or someone in our network, may need to get in contact with you regarding your areas of expertise. There is no intent whatsoever to create an employment, agency, joint venture or partnership relationship between you or us or any third party, or any other legal arrangement that would impose liability upon one party for the act or failure to act of the other party.
                    </label>
                  </div>
                  
                </div>
              </div>
              <div class="mb-4">
                <button type="submit" class="btn btn-primary" id="request_button" onclick="request_join()">
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
          Crafted with <img src="https://img.icons8.com/ios-glyphs/20/4D2D19/like--v1.png"/> by <a class="fw-semibold" href="#" target="_blank">iwynoworks</a>
        </div>
        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
          <a class="fw-semibold"  target="_blank">iwynoworks</a> &copy; <span data-toggle="year-copy">2022</span>
        </div>
      </div>
    </div>
  </footer>
  <!-- END Footer -->
</main>
<script>
  var $config = {

  FetchIwynoSkill: "{{ route('fetch_iwyno_skill') }}",
  JoinFIN : "{{ route('join_fin_initiative') }}"
  
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



      <script>

    function request_join()
    {
      $('#request_button').html('<i class="fad fa-asterisk fa-spin" style="color:white !important"></i> Requesting...');
    $('#request_button').attr('disabled', true);
      var fin_name = $('[name="fin_name"]').val()
var fin_email = $('[name="fin_email"]').val()
var fin_phone = $('[name="fin_phone"]').val()
var fin_linkedin = $('[name="fin_linkedin"]').val()
var fin_user_summary = $('[name="fin_user_summary"]').val()
var fin_country = $('[name="fin_user_country"]').val()
var fin_city = $('[name="fin_city"]').val()
var fin_user_link_tree = $('[name="fin_user_link_tree"]').val()
var fin_skills = $('[name="fin_skills"]').val()
var fin_value = $('[name="fin_value"]').val()
var fin_help = $('[name="fin_help"]').val()
var fin_user_currency = $('[name="fin_user_currency"]').val()
var fin_user_hour_rate = $('[name="fin_user_hour_rate"]').val()

// if($('#terms_and_con').is(':checked'))
//      {
//       iziToast.info({
//         title: 'Please fill all the details!',
//         message: 'Please check terms and condition',
//         position: 'topRight'
//     })
   
//      }
    


if (fin_name == '' || fin_email == '' || fin_phone == '' ||
fin_linkedin == '' || fin_user_summary == '' || fin_country == '' 
 || 
fin_value == '' || fin_help == '' ||fin_user_currency == '' || fin_user_hour_rate == '' ) {
    iziToast.error({
        title: 'Please fill all the details!',
        message: 'fields are not complete.',
        position: 'topRight'
    })
    $('#request_button').html('<i class="fad fa-sign-in" style="color:white !important"></i> JOIN FIN NETWORK');
            $('#request_button').attr('disabled', false);
}



else {
    $.post(
        $config.JoinFIN,
        {
          fin_name:fin_name,
          fin_email:fin_email,
          fin_phone:fin_phone,
          fin_linkedin:fin_linkedin,
          fin_user_summary:fin_user_summary,
          fin_country:fin_country,
          fin_city:fin_city,
          fin_user_link_tree:fin_user_link_tree,
          fin_skills:fin_skills,
          fin_value:fin_value,
          fin_help:fin_help,
          fin_user_currency:fin_user_currency,
          fin_user_hour_rate:fin_user_hour_rate,
          _token: $("[name='csrf_token']").val()


      
        },
        function (result) {
          if (result.status == 'already_exist') {
            // right_notify('danger', result.message);
            iziToast.info({
        title: 'Info',
        message: 'Your request already exist',
        position: 'topRight'
    })
            $('#request_button').html('<i class="fad fa-sign-in" style="color:white !important"></i> JOIN FIN NETWORK');
            $('#request_button').attr('disabled', false);

        }

        if (result.status == 'success') {
            // right_notify('success', result.message);
            iziToast.success({
        title: 'Success',
        message: 'Your request is been registered successfully.',
        position: 'topRight'
    })
    location.reload(1000);
            

        }
        }
    )
      }
    }



       </script>

@endsection
