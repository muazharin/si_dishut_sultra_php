<?php
  include "header_admin.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pejabat UPTD KPH Sultra
        <small>Aplikasi Dishut Sultra</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">KPH</a></li>
        <li class="active">Data Pejabat UPTD KPH Sultra</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="row">
              <?php
                include "pagination_video.php";
                while($crow = mysqli_fetch_array($nquery)){
                  echo "<div class='card mb-4' style='padding:3%;'>";
                    echo "<div class='card-body'>";
                      echo "<div class='row'>";
                        echo "<div class='col-lg-6'>";
                          echo "<div class='img-fluid rounded'><a href='#'>";
                            echo "<iframe  width='460' height='215' src='https://www.youtube.com/embed/".$crow[video_link]."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                          echo "</a></div>";
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
                /*include "config.php";
                $query="SELECT * FROM video";
                $sql=mysqli_query($con, $query);
                while ($data=mysqli_fetch_array($sql)) {
                  echo '<div class="col-lg-3 mb-4">';
                echo '<div class="card h-100 text-center">';
                  echo '<video class="img-fluid rounded" controls alt="" width="215" height="215">
                          <source src="video/'.$data[video_file].'" type="video/mp4">
                        </video>
                  <div class="card-body">';
                    echo '<h4 class="card-title">'.$data[judul].'</h4>';
                    echo '<h6 class="card-subtitle mb-2 text-muted">'.$data[keterangan].'</h6>';
                  echo '</div>';
                  echo '<div class="card-footer">';
                    echo '<a class="btn btn-primary" href="lihat_video.php?id_video='.$data[id_video].'">Selengkapnya</a>';
                  echo '</div><br>';
                echo '</div>';
              echo '</div>';
                }*/
              ?>

          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="bower_components/jquery/jquery-3.2.1.min.js"></script>
<script>
   $(document).ready(function() {
      $("#box3").addClass("active");
      $("#box3-1").addClass("active");
   });
</script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
