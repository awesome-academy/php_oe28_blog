<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="manh">
   <!-- Title-->
   <title>DISTO - Blog</title>
   <!-- Favicon-->
   <link rel="icon" href="{{ asset('/bower_components/disto_template/images/favicon.jpg') }}" tppabs="http://jellywp.com/disto-preview/img/favicon.jpg" type="image/x-icon">
   <!-- Stylesheets-->
   <link href="{{ asset('/bower_components/disto_template/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{ asset('/bower_components/disto_template/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{ asset('/bower_components/disto_template/css/responsive.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{ asset('/bower_components/disto_template/css/main.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{ asset('/bower_components/disto_template/css/min.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{ asset('/bower_components/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="mobile_nav_class jl-has-sidebar">
   <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
      <div class="options_layout_container full_layout_enable_front">
         @include('layouts.header')

         @yield('main_content')

         @include('layouts.footer')
      </div>
   </div>
   <div id="go-top">
      <a href="#go-top"><i class="fa fa-angle-up"></i></a>
   </div>
   <script src="{{ asset('/bower_components/disto_template/js/jquery.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/fluidvids.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/infinitescroll.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/justified.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/theia-sticky-sidebar.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/aos.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/slick.js') }}"></script>
   <script src="{{ asset('/bower_components/disto_template/js/custom.js') }}"></script>
   <script src="{{ asset('/bower_components/Font-Awesome/js/fontawesome.js') }}"></script>
</body>
</html>
