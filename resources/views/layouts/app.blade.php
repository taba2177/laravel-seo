<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default dption')">
    <title>@yield('title', 'Laravel SEO Sample')</title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'Laravel SEO Sample')">
    <meta property="og:description" content="@yield('meta_description', 'Default des')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="@yield('site_name','مصنع فن الستارة')"/>
    <meta property="og:image" content="@yield('meta_image', url('/default-image.jpg'))">
    <meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="1024" />
	<meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="الصفحة الرئيسية" />
	<meta name="twitter:site" content="@art_of_curtains" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://curtainart.sa/ar/","url":"https://curtainart.sa/ar/","name":"ستائر رول ويفي لينين شتر بلاك اوت افضل مصنع ستائر بالرياض و المملكة العربية السعودية","isPartOf":{"@id":"https://curtainart.sa/ar/#website"},"about":{"@id":"https://curtainart.sa/ar/#organization"},"primaryImageOfPage":{"@id":"https://curtainart.sa/ar/#primaryimage"},"image":{"@id":"https://curtainart.sa/ar/#primaryimage"},"thumbnailUrl":"https://curtainart.sa/wp-content/uploads/2017/06/56.jpg","datePublished":"2017-06-10T08:21:56+00:00","dateModified":"2024-07-21T06:05:26+00:00","description":"نقدم ستائر عالية الجودة ستائر رول بلاك اوت أمريكي روماني تركي اقمشة ويفي لينين شتر خارجي بأناقة مميزة وحلول مخصصة لكل الأذواق","breadcrumb":{"@id":"https://curtainart.sa/ar/#breadcrumb"},"inLanguage":"ar","potentialAction":[{"@type":"ReadAction","target":["https://curtainart.sa/ar/"]}]},{"@type":"ImageObject","inLanguage":"ar","@id":"https://curtainart.sa/ar/#primaryimage","url":"https://curtainart.sa/wp-content/uploads/2017/06/56.jpg","contentUrl":"https://curtainart.sa/wp-content/uploads/2017/06/56.jpg","width":1024,"height":1024},{"@type":"BreadcrumbList","@id":"https://curtainart.sa/ar/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"الرئيسية"}]},{"@type":"WebSite","@id":"https://curtainart.sa/ar/#website","url":"https://curtainart.sa/ar/","name":"مصنع فن الستارة","description":"افضل مصنع ستائر بالرياض و المملكة العربية السعودية","publisher":{"@id":"https://curtainart.sa/ar/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://curtainart.sa/ar/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"ar"},{"@type":"Organization","@id":"https://curtainart.sa/ar/#organization","name":"مصنع فن الستارة","url":"https://curtainart.sa/ar/","logo":{"@type":"ImageObject","inLanguage":"ar","@id":"https://curtainart.sa/ar/#/schema/logo/image/","url":"https://curtainart.sa/wp-content/uploads/2024/06/Artboard-11.svg","contentUrl":"https://curtainart.sa/wp-content/uploads/2024/06/Artboard-11.svg","width":1024,"height":1024,"caption":"مصنع فن الستارة"},"image":{"@id":"https://curtainart.sa/ar/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/profile.php?id=61559157211411","https://x.com/art_of_curtains","https://www.tiktok.com/@artcurtains.sa","https://www.instagram.com/artcurtains_ksa"],"description":"صن رول تصمم و تنفذ و تسوق منتجاتها من ارقي انواع اقمشة الستائر الحديثة و المعاصرة الابداع و الجودة تلعب دورا هاما في نجاحنا","email":"artcurtains.sa@gmail.com","telephone":"0554373327","legalName":"مصنع فن الستاره للصناعة","foundingDate":"2024-04-12","numberOfEmployees":{"@type":"QuantitativeValue","minValue":"11","maxValue":"50"},"publishingPrinciples":"https://curtainart.sa/ar/shop/"}]}</script>
</head>
<body>
    @yield('content')
</body>
</html>


