<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  
  <!-- Favicons -->
  <link rel="icon" href="/permission/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="/permission/assets/img/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/permission/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/permission/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/permission/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/permission/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/permission/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/permission/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/permission/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/permission/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @yield('css')
</head>
<body>
  <!-- Your HTML content here -->
</body>
</html>


<body>

@include('panel.layouts.header')
@include('panel.layouts.sidebar')


<main id="main" class="main" style="height:100vh;">
@yield('content')
</main><!-- End #main -->

@include('panel.layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('script')

</body>

</html> 