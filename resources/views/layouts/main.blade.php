<!DOCTYPE html>
<html lang="uk">
<head>
  <title>Експертна система якості води Житомирської області | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href={{ asset('storage/cs.css')}}  rel="stylesheet">

    <!-- Favicons -->
    <link href={{ asset('storage/assets/img/favicon.png') }}  rel="icon">
    <link href={{ asset('storage/assets/img/apple-touch-icon.png') }}  rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('storage/assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/bootstrap/css/bootstrap.min.css') }}  rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}  rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/boxicons/css/boxicons.min.css') }}  rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/glightbox/css/glightbox.min.css') }}  rel="stylesheet">
    <link href={{ asset('storage/assets/vendor/swiper/swiper-bundle.min.css') }}  rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('storage/assets/css/style.css') }}  rel="stylesheet">

    @yield('custom-css')
</head>

<body>
    @include('includes.header')

    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')

    <!-- Vendor JS Files -->
    <script src={{ asset('storage/assets/vendor/aos/aos.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/glightbox/js/glightbox.min.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/php-email-form/validate.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/purecounter/purecounter.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/swiper/swiper-bundle.min.js') }} ></script>
    <script src={{ asset('storage/assets/vendor/waypoints/noframework.waypoints.js') }} ></script>

    <!-- Template Main JS File -->
    <script src={{ asset('storage/assets/js/main.js') }} ></script>

    @yield('custom-js')
</body>
</html>



