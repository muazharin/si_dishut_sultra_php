<?php
	include "config.php";
	$idpos=$_POST['idpos'];
	$email=$_POST['email'];
	$komentar=$_POST['komentar'];
	$query="INSERT INTO komentar (id_komentar, id_posting, email, konten) VALUES (NULL, '".$idpos."', '".$email."', '".$komentar."')";
	$sql = mysqli_query($con, $query);
	  if($sql){ 
	    ?>
			<script type='text/javascript' language='JavaScript'>
				alert('Terima Kasih atas komentar Anda');
					window.location.href="all-blogs";
			</script>
			<?php
	  }else{
	    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	    echo "<br><a href='all-blogs'>Kembali Ke Form</a>";
	  }
?>