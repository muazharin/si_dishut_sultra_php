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
            <?php
                include "config.php";
                $id=$_GET['id'];
                $query="SELECT * FROM kph WHERE id='".$id."'";
                $sql=mysqli_query($con, $query);
                $data=mysqli_fetch_array($sql);
            ?>
            <form method="post" action="ubah_data_kph.php" enctype="multipart/form-data">
              <div class="box-body">
              <p class="category">Masukkan foto di sini</p>
              <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
              <input type="file" name="foto" /><br>
              <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="number" class="form-control" name="no" required="" value="<?php echo $data[no]; ?>">
                        </div>
                    </div>
                </div>
              <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_kph" required="" value="<?php echo $data[nama]; ?>" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" required="" value="<?php echo $data[nip]; ?>" >
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pangkat / Golongan</label>
                            <select class="form-control" name="pangkat">
                              <option value="Juru Muda, I/a" <?php if($data[pangkat_gol]=='Juru Muda, I/a'){echo 'selected'; }?> >Juru Muda, I/a</option>
                              <option value="Juru Muda, Tingkat 1 I/b" <?php if($data[pangkat_gol]=='Juru Muda, Tingkat 1 I/b'){echo 'selected'; }?> >Juru Muda, Tingkat 1 I/b</option>
                              <option value="Juru,  I/c" <?php if($data[pangkat_gol]=='Juru,  I/c'){echo 'selected'; }?> >Juru,  I/c</option>
                              <option value="Juru Tingkat 1,  I/d" <?php if($data[pangkat_gol]=='Juru Tingkat 1,  I/d'){echo 'selected'; }?> >Juru Tingkat 1,  I/d</option>
                              <option value="Pengatur Muda, II/a" <?php if($data[pangkat_gol]=='Pengatur Muda, II/a'){echo 'selected'; }?> >Pengatur Muda, II/a</option>
                              <option value="Pengatur Muda Tingkat I, II/b" <?php if($data[pangkat_gol]=='Pengatur Muda Tingkat I, II/b'){echo 'selected'; }?> >Pengatur Muda Tingkat I, II/b</option>
                              <option value="Pengatur,  II/c" <?php if($data[pangkat_gol]=='Pengatur,  II/c'){echo 'selected'; }?> >Pengatur,  II/c</option>
                              <option value="Pengatur Tingkat I,  II/d" <?php if($data[pangkat_gol]=='Pengatur Tingkat I,  II/d'){echo 'selected'; }?> >Pengatur Tingkat I,  II/d</option>
                              <option value="Penata Muda, III/a" <?php if($data[pangkat_gol]=='Penata Muda, III/a'){echo 'selected'; }?> >Penata Muda, III/a</option>
                              <option value="Penata Muda Tingkat I, III/b" <?php if($data[pangkat_gol]=='Penata Muda Tingkat I, III/b'){echo 'selected'; }?> >Penata Muda Tingkat I, III/b</option>
                              <option value="Penata,  III/c" <?php if($data[pangkat_gol]=='Penata,  III/c'){echo 'selected'; }?> >Penata,  III/c</option>
                              <option value="Penata Tingkat I,  III/d" <?php if($data[pangkat_gol]=='Penata Tingkat I,  III/d'){echo 'selected'; }?> >Penata Tingkat I,  III/d</option>
                              <option value="Pembina, IV/a" <?php if($data[pangkat_gol]=='Pembina, IV/a'){echo 'selected'; }?> >Pembina, IV/a</option>
                              <option value="Pembina Tingkat I, IV/b" <?php if($data[pangkat_gol]=='Pembina Tingkat I, IV/b'){echo 'selected'; }?> >Pembina Tingkat I, IV/b</option>
                              <option value="Pembina Utama Muda,  IV/c" <?php if($data[pangkat_gol]=='Pembina Utama Muda,  IV/c'){echo 'selected'; }?> >Pembina Utama Muda,  IV/c</option>
                              <option value="Pembina UtamaMadya,  IV/d" <?php if($data[pangkat_gol]=='Pembina UtamaMadya,  IV/d'){echo 'selected'; }?> >Pembina UtamaMadya,  IV/d</option>
                              <option value="Pembina Utama, IV/e" <?php if($data[pangkat_gol]=='Pembina Utama, IV/e'){echo 'selected'; }?> >Pembina Utama, IV/e</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required="" value="<?php echo $data[jabatan]; ?>" > 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" required="" value="<?php echo $data[lokasi]; ?>" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Luas Wilayah</label>
                            <input type="text" class="form-control" name="luas" required="" value="<?php echo $data[luas_wilayah]; ?>" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Potensi</label>
                            <textarea type="text" class="form-control" rows="5" name="potensi" required=""><?php echo $data[potensi]; ?></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <p><button type="submit" class="btn btn-primary" name="ubah">UBAH</button> <a href="listkph"><button type="button" class="btn btn-danger" name="batal">BATAL</button></a></p>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="bower_components/jquery/jquery-3.2.1.min.js"></script>
<script>
   $(document).ready(function() {
      $("#box2").addClass("active");
      $("#box2-1").addClass("active");
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
