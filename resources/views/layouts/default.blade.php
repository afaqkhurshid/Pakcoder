
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Title & Meta -->
    <title>@yield('title', 'PakCoder | IT Solutions, Web Development & Digital Marketing')</title>
    <meta name="description" content="@yield('meta_description', 'PakCoder provides IT solutions, web development, Laravel & Symfony apps, WordPress, Shopify stores, and digital marketing to help businesses grow online.')">
    <meta name="keywords" content="@yield('meta_keywords', 'IT solutions, web development, Laravel, Symfony, WordPress, Shopify, digital marketing, Pakistan, software house')">
    <meta name="author" content="PakCoder">

    <!-- Open Graph (for social sharing) -->
    <meta property="og:title" content="@yield('title', 'PakCoder | IT Solutions, Web Development & Digital Marketing')" />
    <meta property="og:description" content="@yield('meta_description', 'PakCoder offers complete IT solutions including websites, applications, and digital marketing strategies.')" />
    <meta property="og:image" content="{{ asset('/img/logopak.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'PakCoder - IT Solutions')" />
    <meta name="twitter:description" content="@yield('meta_description', 'End-to-end IT solutions, web apps & marketing')" />
    <meta name="twitter:image" content="{{ asset('/img/logopak.png') }}" />

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicons -->
    <link href="{{ asset('/img/favcion.jpg') }}" rel="icon">
    <link href="{{ asset('/img/favcion.jpg') }}" rel="apple-touch-icon">

    <!-- Fonts & CSS -->
    <link rel="preconnect" href="{{ url('/') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Google Tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17487709730"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-17487709730');
    </script>
</head>


<body class="index-page">
    @include('layouts.header')

    <main class="main">
        @yield('content')
    </main>

    @include('layouts.footer')

    <a href="https://wa.me/923134672846" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" target="_blank" title="WhatsApp"> <i class="bi bi-whatsapp"></i></a>

    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <!-- Vendor JS -->
    {{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>