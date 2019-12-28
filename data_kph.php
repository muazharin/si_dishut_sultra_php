<?php
  include "header.php"
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small>Daftar Pejabat UPTD KPH SULTRA</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Home</a>
        </li>
        <li class="breadcrumb-item active">KPH</li>
      </ol>

      <!-- Intro Content -->
     
      <!-- /.row -->

      <!-- Team Members -->
      <h2></h2>

      <div class="row">
        <?php
          include "config.php";
          $query="SELECT * FROM kph";
          $sql=mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            echo '<div class="col-lg-3 mb-4">';
              echo '<div class="card h-100 text-center">';
                echo '<img class="card-img-top" src="dist/img/kph/'.$data[foto].'" alt="" width="200" height="250">
                      <div class="card-body">';
                  echo '<h6 class="card-title">'.$data[nama].'</h6>';
                  echo '<p class="card-text"><h6>'.$data[jabatan].'.</h6></p>';
                echo '</div>';
                echo '<div class="card-footer">';
                  echo '<a class="btn btn-primary" href="data_kph_lengkap.php?id='.$data[id].'">Selengkapnya</a>';
                echo '</div><br>';
              echo '</div>';
            echo '</div>';
          }
         ?>
      </div>
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
