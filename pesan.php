<?php
  include "header_admin.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kotak Pesan
        <small>Aplikasi Dishut Sultra</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Kotak Pesan</a></li>
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
                <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php
                      include 'config.php';
                      $halaman = 30;
                      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                      $result = mysqli_query($con, "SELECT * FROM pesan ORDER BY id_pesan DESC");
                      $total = mysqli_num_rows($result);
                      $pages = ceil($total/$halaman);            
                      $query = mysqli_query($con, "SELECT * FROM pesan ORDER BY id_pesan DESC LIMIT $mulai, $halaman");
                      $no =$mulai+1;
                      while($data = mysqli_fetch_assoc($query)){
                        echo "<td></td>";
                        echo "<td class='mailbox-star'></td>";
                        echo "<td class='mailbox-name'><a href='lihat_pesan.php?id_pesan=".$data[id_pesan]."'>".$data[nama_lengkap]."</a></td>";
                        echo "<td class='mailbox-attachment'>";
                          if($data[status]=='unread') echo "<div class='icon'><i class='ion ion-android-mail'></i></div>";
                          else echo "<div class='icon'><i class='ion ion-android-drafts'></i></div>";
                        echo "</td>";
                        echo "<td class='mailbox-subject'><b>".$data[email]."</b> - ".cutText($data[content_pesan],50,1).'...'; echo "</td>";
                        echo "<td width='mailbox-date'><a class='btn btn-default btn-sm' href='proses_hapus_pesan.php?id_pesan=".$data[id_pesan]."'";?> title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus pesan ini ?')">Hapus</a></td><?php
                        echo "</tr>";
                        }
                    ?>
                    
                    
                    
                    
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
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

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="bower_components/jquery/jquery-3.2.1.min.js"></script>
<script>
   $(document).ready(function() {
      $("#box5").addClass("active");
      
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
