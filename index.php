<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- inject:css -->
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css"> 

  <link rel="stylesheet" href= "/vendor/css/style.css"/>
  <!-- endinject -->
  <link rel="shortcut icon" href="./vendor/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
  <?php include "./templates/navigation.php"; ?>

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <p class="page-name d-none d-lg-block">Bonjour M.Kimbidima</p>
        <ul class="navbar-nav ml-lg-auto">
      
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
          <span class="icon-menu icons"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    
        <!-- partial -->
        <div class="content-wrapper">
          <?php include "./templates/content.php" ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  
  <!-- inject:js -->
  <script src="./vendor/js/off-canvas.js"></script>
  <script src="./vendor/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./vendor/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
