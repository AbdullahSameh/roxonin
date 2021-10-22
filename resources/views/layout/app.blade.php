<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicons Icon -->
  <link rel="icon" href="{{ asset('images/icons/icon.png') }}" type="image/x-icon" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

  <!-- Styles Libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @stack('css')
</head>

<body id="body" dir="{{ App::currentLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="bg-gray-50">

  <div id="app">

    @include('layout.header')

    <!-- ./content -->
    @yield('content')
    <!-- ./content -->

    @include('layout.footer')
  </div>
  <!-- #/app -->


  @include('layout.mobile-menu')

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/script.js') }}"></script>
</body>

</html>
