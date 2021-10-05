<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

  <!-- Styles Libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @stack('css')
</head>

<body>

  <div id="app">

    @include('layout.header')

    <!-- ./content -->
    @yield('content')
    <!-- ./content -->

  </div>
  <!-- #/app -->


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script>
    new Splide('#homeSlider', {
      type: 'loop',
      arrows: false,
      autoplay: true,
      interval: 4000,
    }).mount();
  </script>
</body>

</html>
