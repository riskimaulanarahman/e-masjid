<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

    <!-- font family -->
    <!-- viga -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">\

    <!-- Robot slab -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- leaflet -->

    
     <!-- leaflet -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
     integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
     crossorigin=""/>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>

 

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    -<script src="<?php echo e(asset('js/jquery-3.3.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?> " ></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?> " ></script>
    <title>Sistem Informasi Masjid Balikpapan</title>
    <style>
      .navbar{
        background-color: #0A0036;
        color: #fff;
      }
      .navbar-brand{
        font-family: viga;
        color: #fff;
      }

      .nav-link{
        font-family: Source Sans Pro;
        color: #fff;
        margin-left: 20px;
      }

    </style>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">SIMAS Balikpapan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info Masjid
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        </form>
      </div>
    </nav>
  </div>
  <div class="container">
    <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kaW5hcnJ1IiwiYSI6ImNrcWkwYnJ2cDA3OXUybnBkczM5bG1uNHAifQ.N9VXzDjSmxEDP1TcLjAASA';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
      });
    </script>
    
  </div>

  </body>
</html><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/layouts/front-end.blade.php ENDPATH**/ ?>