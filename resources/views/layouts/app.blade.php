<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default dption')">
    <title>@yield('title', 'ستار سبا')</title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'ستار سبا')">
    <meta property="og:description" content="@yield('meta_description', 'Default des')">
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
</head>
<body>
    @yield('content')
</body>
</html>


