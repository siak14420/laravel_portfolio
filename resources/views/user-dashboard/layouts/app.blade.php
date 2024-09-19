<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin Pro</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('user-dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user-dashboard/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('user-dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('user-dashboard/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('user-dashboard/images/favicon.ico') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=navbar&utm_medium=productdemo&utm_campaign=getpro" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
     @include('user-dashboard.partials.navbar')
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">      
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       @include('user-dashboard.partials.sidebar')
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          @include('user-dashboard.partials.footer')
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('user-dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('user-dashboard/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('user-dashboard/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('user-dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('user-dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ asset('user-dashboard/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('user-dashboard/js/template.js') }}"></script>
  <script src="{{ asset('user-dashboard/js/settings.js') }}"></script>
  <script src="{{ asset('user-dashboard/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('user-dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('user-dashboard/js/proBanner.js') }}"></script>

  <!-- End custom js for this page-->
  <script src="{{ asset('user-dashboard/js/jquery.cookie.js') }}" type="text/javascript"></script>
</body>

</html>

