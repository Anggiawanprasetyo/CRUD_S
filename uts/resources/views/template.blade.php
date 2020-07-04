<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Web 3</title>

  <!-- Bootstrap core CSS -->
  
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/full-width-pics.css')}}" rel="stylesheet">

</head>

<body>
    @include('navbar')
  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('http://getwallpapers.com/wallpaper/full/0/b/f/841899-widescreen-full-hd-background-images-1920x1080.jpg');">
    <img class="img-fluid d-block mx-auto" src="http://snrt.bisnis.pnj.ac.id/images/logologo.png" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>UTS</h1>
      <p class="lead">WEB 3 Laravel</p>
        @yield('main')
      
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('http://getwallpapers.com/wallpaper/full/0/b/f/841899-widescreen-full-hd-background-images-1920x1080.jpg');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Footer -->
    @yield('footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
