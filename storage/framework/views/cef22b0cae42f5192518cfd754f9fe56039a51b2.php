<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <!-- Bootstrap CSS -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <!-- icon -->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- viga -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

   

    <!-- leaflet -->

    



       <!--charts -->
        
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo/chart-bar-demo.js')); ?>"></script> 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset('js/jquery-3.3.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?> " ></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?> " ></script>
    <title>Sistem Informasi Masjid Balikpapan</title>
    
  </head>
  <body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('halamanutama')); ?>">SIMAS BALIKPAPAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" href="<?php echo e(route('halamanutama')); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="<?php echo e(route('profilmasjid')); ?>">Masjid</a>

          <a class="tombol btn btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
        </div>
      </div>
    </div>
    </nav>
    <!--akhir nav-->

    <!--content-->
    <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!--Akhir content-->
    
    
    <!--footer-->
    <div id="footer">
      <div class="container">
      <div class="row">
          <div class="col-md">
          <h4 class="jfooter">Tentang Kami</h4>
          <p>Web ini dirancang untuk menyelesaikan skripsi jurusan informatika fakultas ilmu komputer universitas mulia balikpapan</p>
          </div>
          <div class="col-md">
          <h4 class="jfooter">Alamat Kami</h4>
          <div class="alamat">
              <i class="fas fa-map-marker-alt"> Jl. Letjend Ismahyudi</i>
          </div>
          </div>
          <div class="col-md">
          <h4 class="jfooter">Peta Situs</h4>
          <a>profil masjid</a>
          <a>nama masjid</a>
          </div>
      </div>
      <!-- Divider -->
      <hr style="background-color: #ffffff">
      <div class="copyright">
          <p>Copyright <i class="far fa-copyright" ></i> klpmasjid</p>
      </div>
      </div>
    </div>
    <!--Akhir Footer-->
  </body>

</html><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>