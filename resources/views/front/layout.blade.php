<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title') iwynoworks</title>

    <meta name="description"
        content="ConnectChief - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('front-images/ccfav.ico')}}" type="image/icon">
    <link rel="stylesheet" id="css-main"
    href="{{ asset('public/front-css/iwyno.css') }}">
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    {{-- <link rel="shortcut icon" href="{{ asset('public/cdn/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href=" {{ asset('public/cdn/assets/media/favicons/favicon-192x192.pn') }}"> --}}
    {{-- <link href="https://public/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" id="css-main"
        href="{{ asset('public/cdn/assets/js/plugins/select2/css/select2.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@1&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('public/cdn/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/iziToast/iziToast.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/cdn/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" id="css-main"
    href="{{ asset('public/cdn/assets/js/plugins/sweetalert2/sweetalert2.min.css') }}">
   
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/jQuery-Upload-File/uploadfile.css') }}">
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/cdn/assets/js/plugins/dropzonejs/dist/dropzone.css') }}">
    
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/cdn/assets/css/codebase.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="..public/cdn/assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://public/cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
</head>
{{-- <style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(https://miro.medium.com/max/1400/1*CsJ05WEGfunYMLGfsT2sXA.gif) center no-repeat #fff;
}
    </style> --}}

<body>
    {{-- <div id="page-loader" class="show"></div> --}}
    <div id="page-container" class="page-header-fixed page-header-glass main-content-boxed">

        <!-- Header -->
        <header id="page-header">
          <!-- Header Content -->
          <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1 d-flex align-items-center space-x-2">
              <!-- Logo -->
              <a class="link-fx fw-bold" href="{{ route('root') }}">
                <!-- <i class="fa fa-fire text-primary"></i> -->
                <span class="fs-4 text-dual">iwyno</span><span class="fs-4 text-primary" style="color: #b94600 !important;">works</span>
              </a>
              <!-- END Logo -->
  
              <!-- Version -->
              <!-- <span class="d-inline-block fs-xs fw-medium bg-primary-dark text-white rounded-pill py-1 px-2">5.0</span> -->
              <!-- END Version -->
            </div>
            <!-- END Left Section -->
             <!-- Right Section -->
          <div class="space-x-1">

            <a class=" px-3 d-none d-sm-inline-block" href="{{ route('iwyno_values') }}" >
             
              <span class="ms-1 d-none d-sm-inline-block">Our Values</span>
            </a>
            <a class=" px-3" href="{{ route('iwyno_contact') }}">
              
                <span class="ms-1 d-none d-sm-inline-block">Contact</span>
              </a> 
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <a class="btn btn-alt-secondary px-3" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
              <i class="fad fa-burn"></i>
            </a> --}}
            {{-- <a class=" px-3 d-none d-sm-inline-block" href="{{ route('iwyno_service') }}" >
             
              <span class="ms-1 d-none d-sm-inline-block">Services</span>
            </a>
            <a class=" px-3 d-none d-sm-inline-block" href="{{ route('iwyno_technology') }}" >
               
                <span class="ms-1 d-none d-sm-inline-block">Technologies</span>
              </a>
            <a class=" px-3" href="{{ route('iwyno_contact') }}">
              
              <span class="ms-1 d-none d-sm-inline-block">Contact</span>
            </a> --}}
          </div>
          <!-- END Right Section -->
  
         
          </div>
          <!-- END Header Content -->
        </header>
        <!-- END Header -->
  
        <main id="main-container">
            @yield('main-container')
        </main>
      </div>
   
 
   

    
    <script src="{{ asset('public/cdn/assets/js/codebase.core.min.js') }}"></script>
    <script src="{{ asset('public/cdn/assets/js/codebase.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('public/cdn/assets/js/plugins/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/cdn/assets/js/plugins/slick/slick.min.js') }}"></script>

  
    <script>
        jQuery(function() {
            Codebase.helpers(['select2', 'rangeslider','slick']);
        });
    </script>
    <script src="{{ asset('public/cdn/assets/js/plugins/iziToast/iziToast.min.js') }}"> </script>
    <script src="{{ asset('public/cdn/assets/js/plugins/jQuery-Upload-File/jquery.uploadfile.min.js') }}"> </script>
    <script src="{{ asset('public/cdn/assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('public/cdn/assets/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
     
    </script>
    <script src="{{ asset('public/cdn/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('public/cdn/assets/js/custom_utils.js') }}"> </script>
    <script src="{{ asset('public/front-js/typewriter.js') }}"> </script>

    <script>
        jQuery(function() {
            Codebase.helpers(['rangeslider']);
        });
    </script>
    <script>
        function disableAjaxSetupHeaders() {
    
    delete $.ajaxSettings.headers["X-CSRF-TOKEN"];
    delete $.ajaxSettings.headers["X-CSRF-Token"];
   
    
}

function enableAjaxSetupHeaders() {
   
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

}
         $(document).ready(function () {
      disableAjaxSetupHeaders()
    
      $.ajax({
          type: 'get',
          url: 'https://get.geojs.io/v1/ip/geo.json',
          success: function (result)
          {
              if(result.city){
                  var loaction = result.city+', '+result.country
                  $("#location").val(loaction);
              }
              else
              {
                  $("#location").val(result.region);
              }
              
              $("#country").val(result.country);
              
          },
          error:function()
          {
              console.log("something went wrong");
          }
      });
  });
    </script>
  


    <script src="https://public/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('public/cdn/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>



    <script src="{{ asset('public/cdn/assets/js/pages/be_tables_datatables.min.js') }}"></script>
    <script src="https://public/cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    
    </script>
    <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61efbeaab9e4e21181bbc444/1fq881j38';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> --}}
    <!--End of Tawk.to Script-->
</body>



</html>
