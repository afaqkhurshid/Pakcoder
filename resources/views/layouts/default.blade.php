
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Passion - Default Title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Preconnect -->
    <link rel="preconnect" href="{{ url('/') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <!-- =======================================================
    * Template Name: Passion
    * Template URL: https://bootstrapmade.com/passion-bootstrap-template/
    * Updated: Jul 21 2025 with Bootstrap v5.3.7
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
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