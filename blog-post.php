  <?php
    include "header.php"
  ?>
  <?php
    error_reporting(0);
    include "config.php";
    $id=$_GET['id_posting'];
    $query="SELECT * FROM postingan WHERE id_posting='".$id."'";
    $sql = mysqli_query($con, $query);
    $data=mysqli_fetch_array($sql);
  ?>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small>
          <a href="#"><?php echo $data[judul];?></a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="dist/img/<?php echo $data[foto];?>" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $data[waktu]; ?></p>

          <hr>

          <!-- Post Content -->
          <?php echo $data[content];?>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Komentar dan Saran :</h5>
            <div class="card-body">
              <form action="isikomentar.php" method="post">
                <div class="form-group">
                  <input type="hidden" class="form-control" rows="3" name="idpos" value="<?= $id; ?>" required="" />
                </div>
                <div class="form-group">
                  <label>Email*</label>
                  <input class="form-control" rows="3" name="email" required="" />
                </div>
                <div class="form-group">
                  <label>Komentar*</label>
                  <textarea class="form-control" rows="3" name="komentar" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              <p>Bakti Rimbawan adalah program Kementerian Kehutanan untuk memenuhi kebutuhan tenaga kerja tingkat terampil dan ahli pada instansi kehutanan, dan untuk mengembangkan profesi di bidang kehutanan bagi lulusan sekolah menengah kejuruan (SMK) kehutanan dan Sekolah Program Keahlian Kehutanan, Diploma, Sarjana serta program magang/praktek bagi siswa SMK Kehutanan dan mahasiswa fakultas/program studi/jurusan kehutanan dalam rangka melaksanakan pengabdian pada negara khususnya pembangunan kehutanan.</p>
            </div>
          </div>

        </div>

      </div>
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
