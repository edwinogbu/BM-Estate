<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BM Real Estate Agency</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">

</head>
<body>

  @include('layouts.frontend.partials.loginNavigation')
  @yield('content')
  @include('layouts.frontend.partials.footer')

</body>
</html>
