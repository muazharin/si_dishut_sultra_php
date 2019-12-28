<?php
  include "header.php"
?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('dist/img/hutan.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hutan Bakau 1</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('dist/img/hutan2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hutan Bakau 2</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('dist/img/hutan3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hutan Bakau 3</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Fourth - Set the background image for this slide in the line below >
          <div class="carousel-item" style="background-image: url('dist/img/hutan3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Fourth Slide</h3>
              <p>This is a description for the fourth slide.</p>
            </div>
          </div-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h2 class="my-4"></h2>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Kepala Dinas Kehutanan</h4>
            <div class="card-body">
              <center><img src="dist/img/default-person.jpg" width="150px" height="150px">
              <p class="card-text">Ir. H. Rusbandriyo, MP.</p></center>
            </div>
            <div class="card-footer">
              <center><a href="#" class="">name@example.com</a></center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Sekretaris Dinas Kehutanan</h4>
            <div class="card-body">
              <center><img src="dist/img/default-person.jpg" width="150px" height="150px">
              <p class="card-text">Ir. H. Anshar, M.Si.</p></center>
            </div>
            <div class="card-footer">
              <center><a href="#" class="">name@example.com</a></center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <center><h4 class="card-header">Bendahara</h4></center>
            <div class="card-body">
              <center>
              <img src="dist/img/default-person.jpg" width="150px" height="150px">
              <p class="card-text">Bendahara</p></center>
            </div>
            <div class="card-footer">
              <center><a href="#" class="">name@example.com</a></center>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Project Heading</h2>
      <div class="row">
      <?php
        include "config.php";
        $query="SELECT * FROM postingan ORDER BY id_posting DESC";
        $sql = mysqli_query($con, $query);
        $i=1;
        while( $data = mysqli_fetch_array($sql)) {
          if($i<7){
            echo "<div class='col-lg-4 col-sm-6 portfolio-item'>";
              echo "<div class='card h-100'>";
                echo "<a href='#'><img class='card-img-top' src='dist/img/$data[foto]' alt=''></a>";
                echo "<div class='card-body'>";
                  echo "<h4 class='card-title'>";
                    echo "<a href='blog-post.php?id_posting=$data[id_posting]'>$data[judul]</a>";
                  echo "</h4>";
                  echo "<p class='card-text'>".cutText($data[content],100,1).'...'; echo "</p>";
                echo "</div>
              </div>
            </div>";    
          }else{
            echo "";
          }
        
        $i++;
        }
      ?>
      
        
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>9 Nilai Dasar Rimbawan</h2>
          <p>Adapun 9 nilai dasar rimbawan yaitu</p>
          <ul>
            <li>Jujur</li>
            <li>Tanggung Jawab</li>
            <li>Ikhlas</li>
            <li>Disiplin</li>
            <li>Visioner</li>
            <li>Adil</li>
            <li>Peduli</li>
            <li>Kerjasama</li>
            <li>Profesional</li>
          </ul>
          
        </div>
        <div class="col-lg-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-3gVJNXLW9E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <!--video class="img-fluid rounded" controls>
            <source src="video/MarsRimbawan.mp4" type="video/mp4">
          </video>
          <!--img class="img-fluid rounded" src="dist/img/dishut.jpg" alt=""-->
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-12">
          <p>Bakti Rimbawan adalah program Kementerian Kehutanan untuk memenuhi kebutuhan tenaga kerja tingkat terampil dan ahli pada instansi kehutanan, dan untuk mengembangkan profesi di bidang kehutanan bagi lulusan sekolah menengah kejuruan (SMK) kehutanan dan Sekolah Program Keahlian Kehutanan, Diploma, Sarjana serta program magang/praktek bagi siswa SMK Kehutanan dan mahasiswa fakultas/program studi/jurusan kehutanan dalam rangka melaksanakan pengabdian pada negara khususnya pembangunan kehutanan.</p>
        </div>
        
      </div>

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
