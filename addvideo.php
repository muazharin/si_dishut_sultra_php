<?php
  include "header_admin.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel User
        <small>Aplikasi Dishut Sultra</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Administrator</a></li>
        <li class="active">Tabel User</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <form method="post" action="simpan_video2.php" enctype="multipart/form-data">
              <div class="box-body">
              <!--p class="category">Masukkan video di sini</p>
              <input type="file" name="file_video" required="" /><br-->
              <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Link YouTube</label>
                            <input type="text" class="form-control" name="link" required="">
                        </div>
                    </div>
                </div>
              <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Judul Video</label>
                            <input type="text" class="form-control" name="judul" required="">
                        </div>
                    </div>
                </div>
              <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required="">
                        </div>
                    </div>
                </div>
                 <input type="hidden" name="posted" value="<?php echo $a; ?>">
                <p><button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button></p>
              </div>
            </form>
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

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="bower_components/jquery/jquery-3.2.1.min.js"></script>
<script>
   $(document).ready(function() {
      $("#box3").addClass("active");
      $("#box3-2").addClass("active");
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
