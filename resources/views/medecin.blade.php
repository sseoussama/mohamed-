<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet"  href="{{ asset('assets/main/app.css')}}" />


</head>

<body>  
    @include('navbar.navbarmedcin')

  <main id="main">

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <h1>Bienvenue, Dr. </h1>
        </div>
      </section><!-- End Hero -->

  </main><!-- End #main -->


  @include('footer.footer');
  <!--JS Files -->
  @include('script')

</body>
</html>
