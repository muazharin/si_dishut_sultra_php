<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
    error_reporting(0);
    ?>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dinas Kehutanan Provinsi Sulawesi Tenggara</title>
    <link href='dist/img/icon.png' rel='shortcut icon'>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home"><img src="dist/img/logo1.png"> Dinas Kehutanan Provinsi Sulawesi Tenggara</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_kph">KPH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all-blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_video">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small>Daftar Video Kegiatan Kerja</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Home</a>
        </li>
        <li class="breadcrumb-item active">Video</li>
      </ol>
      <h2></h2>

      
        <?php
                include "pagination_video.php";
                while($crow = mysqli_fetch_array($nquery)){
                  echo "<div class='card mb-4'>";
                    echo "<div class='card-body'>";
                      echo "<div class='row'>";
                        echo "<div class='col-lg-6'>";
                          echo "<a href='#'>";
                            echo "<iframe class='img-fluid rounded' width='560px' height='315' src='https://www.youtube.com/embed/".$crow[video_link]."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                          echo "</a>";
                        echo "</div>";
                        echo "<div class='col-lg-6'>";
                          echo "<h2 class='card-title'>".$crow[judul_video]."</h2>";
                          echo "<p class='card-text'>".$crow[keterangan]."</p>";
                          echo "<a href='https://www.youtube.com/watch?v=".$crow[video_link]."' class='btn btn-primary'>Selengkapnya &rarr;</a>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                    echo "<div class='card-footer text-muted'>";
                      echo "Posted on ".$crow[waktu]." by";
                      echo "<a href='#'> ".$crow[posted]."</a>";
                    echo "</div>";
                  echo "</div>";
                }
              ?>
      
      <!-- /.row -->

      <!-- Our Customers -->
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
