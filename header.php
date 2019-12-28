<!DOCTYPE html>
<?php
  error_reporting(0);
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dinas Kehutanan Provinsi Sulawesi Tenggara</title>
    <link href='dist/img/icon.png' rel='shortcut icon'>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/modern-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home"><img src="dist/img/logo1.png"> Dinas Kehutanan Provinsi Sulawesi Tenggara</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_kph">KPH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all-blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/channel/UCGm0xHieDoGIuaEuNqUetKQ">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Kontak Kami</a>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="dashboard">Admin</a>
              </div>
            </li-->
            
          </ul>
        </div>
      </div>
    </nav>