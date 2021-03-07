
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('title')
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/')}}/front-end/img/favicon.png" rel="icon">
  <link href="{{asset('/')}}/front-end/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}/front-end/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/owl.carousel/{{asset('/')}}/front-end/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('/')}}/front-end/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('front-end.includes.header')
 


  <!-- ======= Hero Section ======= -->
  @yield('content')

  <!-- ======= Footer ======= -->
  @include('front-end.includes.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/')}}/front-end/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/')}}/front-end/js/main.js"></script>

</body>

</html>