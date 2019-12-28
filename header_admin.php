<!DOCTYPE html>
<html>
<head>
  <?php
    error_reporting(0);
    session_start();
    $a=$_SESSION['user'];
    include "limited.php";
    function cutText($text, $length, $mode = 2)
    {
        if ($mode != 1)
        {
            $char = $text{$length - 1};
            switch($mode)
            {
                case 2: 
                    while($char != ' ') {
                        $char = $text{--$length};
                    }
                case 3:
                    while($char != ' ') {
                        $char = $text{++$num_char};
                    }
            }
        }
        return substr($text, 0, $length);
    }
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <link href='dist/img/icon.png' rel='shortcut icon'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--img src="dist/img/logo1.png" class="user-image" alt="User Image"-->
              <span class="hidden-xs"><?php echo $a; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/logo2.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $a; ?> - Admin Web
                  <small></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div-->
                <div class="pull-right">
                  <a href="logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo.png" class="img-rounded" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Dishut Sultra</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form >
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      <?php
        include "config.php";
        $query="SELECT COUNT(nama) FROM kph";
        $sql=mysqli_fetch_array(mysqli_query($con,$query));
        $query1="SELECT COUNT(username) FROM user_admin";
        $sql1=mysqli_fetch_array(mysqli_query($con, $query1));
        $query2="SELECT COUNT(judul) FROM postingan";
        $sql2=mysqli_fetch_array(mysqli_query($con, $query2));
        $query3="SELECT COUNT(status) FROM pesan WHERE status='unread'";
        $sql3=mysqli_fetch_array(mysqli_query($con, $query3));
        $query4="SELECT COUNT(status) FROM pesan";
        $sql4=mysqli_fetch_array(mysqli_query($con, $query4));
      ?>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li id="box1" class="">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li id="box2" class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>KPH</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="box2-1"><a href="listkph"><i class="fa fa-circle-o"></i> Daftar Pejabat KPH Sultra</a></li>
            <li id="box2-2"><a href="addkph"><i class="fa fa-circle-o"></i> Tambah KPH</a></li>
          </ul>
        </li>
        <!--li id="box3" class="treeview">
          <a href="#">
            <i class="fa fa-video-camera"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="box3-1"><a href="allvideo"><i class="fa fa-circle-o"></i> Lihat Semua Video</a></li>
            <li id="box3-2"><a href="addvideo"><i class="fa fa-circle-o"></i> Upload Video Baru</a></li>
          </ul>
        </li-->
        <li id="box4" class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Postingan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="box4-1"><a href="postingan"><i class="fa fa-circle-o"></i> Semua Postingan</a></li>
            <li id="box4-2"><a href="postinganbaru"><i class="fa fa-circle-o"></i> Postingan Baru</a></li>
          </ul>
        </li>
        <li id="box5" class="">
          <a href="pesan">
            <i class="fa fa-envelope"></i>
            <span>Kotak Pesan</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php if($sql3[0]>0) echo $sql3[0]; ?></span>
            </span>
          </a>
        </li>
        <!--li id="box7" class="">
          <a href="komentar">
            <i class="fa fa-comment"></i>
            <span>Komentar Postingan</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php if($sql3[0]>0) echo $sql3[0]; ?></span>
            </span>
          </a>
        </li-->
        <li id="box6" class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="box6-1"><a href="administrator"><i class="fa fa-circle-o"></i> Semua Administrator</a></li>
            <li id="box6-2"><a href="adminbaru"><i class="fa fa-circle-o"></i> Administrator Baru</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>