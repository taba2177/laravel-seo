<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default dption')">
    <title>@yield('title', 'ستار سبا')</title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'ستار سبا')">
    <meta property="og:description" content="@yield('meta_description', 'starspa is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="@yield('site_name','صالون ستار سبا')"/>
    <meta property="og:image" content="@yield('meta_image', url('/default-image.jpg'))">
    <meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="1024" />
	<meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="الصفحة الرئيسية" />
	<meta name="twitter:site" content="@star_spa" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/images/favicons/apple-touch-icon.png") }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/assets/images/favicons/favicon-32x32.png") }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/assets/images/favicons/favicon-16x16.png") }}" />
    <link rel="manifest" href="{{ asset("/assets/images/favicons/site.webmanifest") }}" />

       <!-- fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com/">
       <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&amp;family=Cormorant:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
   
   
       <link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap/css/bootstrap.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap-select/bootstrap-select.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/animate/animate.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/fontawesome/css/all.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/jquery-ui/jquery-ui.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/jarallax/jarallax.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/nouislider/nouislider.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/nouislider/nouislider.pips.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/tiny-slider/tiny-slider.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/solox-icons/style.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/owl-carousel/css/owl.carousel.min.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/owl-carousel/css/owl.theme.default.min.css") }}" />
   
       <!-- template styles -->
       <link rel="stylesheet" href="{{ asset("/assets/css/solox-rtl.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/css/solox-custom-rtl.css") }}" />
       <link rel="stylesheet" href="{{ asset("/assets/vendors/solox-toolbar/css/solox-toolbar.css") }}">
</head>
<body class="custom-cursor">

    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')

    
    <script src="{{ asset("/assets/vendors/jquery/jquery-3.7.0.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/bootstrap-select/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jarallax/jarallax.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-ui/jquery-ui.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-appear/jquery.appear.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-validate/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/nouislider/nouislider.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/tiny-slider/tiny-slider.js") }}"></script>
    <script src="{{ asset("/assets/vendors/wnumb/wNumb.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/owl-carousel/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/wow/wow.js") }}"></script>
    <script src="{{ asset("/assets/vendors/imagesloaded/imagesloaded.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/isotope/isotope.js") }}"></script>
    <script src="{{ asset("/assets/vendors/countdown/countdown.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-circleType/jquery.circleType.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-lettering/jquery.lettering.min.js") }}"></script>
    <!-- template js -->
    <script src="{{ asset("/assets/js/solox.js") }}"></script>

    <!-- toolbar js -->
    <script src="{{ asset("/assets/vendors/solox-toolbar/js/js.cookie.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/solox-toolbar/js/jQuery.style.switcher.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/solox-toolbar/js/lang.js") }}"></script>
    <script src="{{ asset("/translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit") }}"></script>
    <script src="{{ asset("/assets/vendors/solox-toolbar/js/solox-toolbar.js") }}"></script>

</body>
</html>


