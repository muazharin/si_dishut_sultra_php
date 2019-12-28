<?php
  include "header.php"
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small>Blog</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home </li>
      </ol>
      <?php
        include "config.php";
        include "page_posting.php";
        while($crow = mysqli_fetch_array($nquery)){
        ?>
          <div class='card mb-4'>
            <div class='card-body'>
              <div class='row'>
                <div class='col-lg-6'>
                  <a href='#'>
                    <img class='img-fluid rounded' width='750px' height='300px' src='dist/img/<?= $crow['foto'];?>' alt=''>
                  </a>
                </div>
                <div class='col-lg-6'>
                  <h2 class='card-title'><?= $crow['judul'];?></h2>
                  <p class='card-text'><?= cutText($crow['content'],150,1).'...'; ?> </p>
                  <a href='blog-post.php?id_posting= <?= $crow[id_posting]; ?>' class='btn btn-primary'>Selengkapnya &rarr;</a>
                </div>
              </div>
            </div>
            <div class='card-footer text-muted'>
              Posted on <?= $crow['waktu'];?> by
              <a href='#'> <?= $crow['posted'];?></a>
            </div>
          </div>
          <?php
        }
      ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
      </ul>

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
