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
        <li class="breadcrumb-item active">Data KPH</li>
      </ol>

      <h2></h2>

    
    <?php
      include "config.php";
      $id=$_GET['id'];
      $query="SELECT * FROM kph WHERE id='".$id."'";
      $sql=mysqli_query($con, $query);
      $data=mysqli_fetch_array($sql);
    ?>
    <section class="content">
      <div class="row" >
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $data[jabatan]; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="row">
              <?php
                  echo '<div class="col-md-8 mb-12">';
                    echo '<div class="card h-100 text-center">';
                      echo '<img class="card-img-top" src="dist/img/kph/'.$data[foto].'" alt="" width="250" height="275"><br>';
                    echo '</div>';
                  echo '</div>';
              ?>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-primary" >
            <div class="box-header with-border">
              <h3 class="box-title">Data KPH</h3>
            </div>
            <!-- /.box-header -->
            <?php
            echo '<div class="box-body">
              <table class="table ">
                <tr>
                  <td><h6 class="card-text"> Nama </h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[nama].'</h6></td>
                </tr>
                <tr>
                  <td><h6 class="card-text"> NIP </h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[nip].'</h6></td>
                </tr>
                <tr>
                  <td><h6 class="card-text"> Pangkat / Golongan </h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[pangkat_gol].'</h6></td>
                </tr>
                <tr>
                  <td><h6 class="card-text"> Lokasi KPH </h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[lokasi].'</h6></td>
                </tr>
                <tr>
                  <td><h6 class="card-text"> Luas Wilayah </h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[luas_wilayah].'</h6></td>
                </tr>
                <tr>
                  <td><h6 class="card-text"> Potensi Wilayah KPH</h6></td>
                  <td><h6 class="card-text"> : </h6></td>
                  <td><h6 class="card-text"> '.$data[potensi].'</h6></td>
                </tr>
              </table>
            </div>';
            ?>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    
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
