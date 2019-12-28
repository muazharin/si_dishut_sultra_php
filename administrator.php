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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <div class="content table-responsive table-full-width">
                  <table class="table table-hover table-striped">
                      <thead>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th colspan="2">Pilihan</th>
                      </thead>
                      <tbody>
                          <?php
                               include 'config.php';
                              $query = 'SELECT * FROM user_admin';
                              $sql = mysqli_query($con, $query);
                              while($data = mysqli_fetch_row($sql)){
                                  echo "<tr width='100%'>";
                                  echo "<td width='10%'>".$data[0]."</td>";
                                  echo "<td width='10%'>".$data[1]."</td>";
                                  echo "<td width='30%'>".$data[2]."</td>";
                                  echo "<td width='5%'><a class='btn btn-primary' href='edit_user.php?id=".$data[0]."'>Ubah</a></td>";
                                  echo "<td width='5%'><a class='btn btn-danger' href='proses_hapus_user.php?id=".$data[0]."'";?> title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</a></td><?php
                                  echo "</tr>";
                              }
                          ?>
                      </tbody>
                  </table>
              </div>
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
      $("#box6").addClass("active");
      $("#box6-1").addClass("active");
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
