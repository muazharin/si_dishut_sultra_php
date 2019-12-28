<?php
	include 'config.php';
	$judul = $_POST['judul'];
	$berita = $_POST['berita'];
	$posted = $_POST['posted'];
	$foto = $_FILES['foto']['name'];
	$foto_file=str_replace(" ","_",$foto);
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto_file;
	$path = "dist/img/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){ 
	  $query = "INSERT INTO postingan (id_posting, judul, content, foto, waktu, posted) VALUES( NULL, '".$judul."', '".$berita."','".$fotobaru."', NOW(), '".$posted."')";
	  $sql = mysqli_query($con, $query);
	  if($sql){ 
	    header("location: postingan");
	  }else{
	    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	    echo "<br><a href='dashboard'>Kembali Ke Form</a>";
	  }
	}else{
	  echo "Maaf, Gambar gagal untuk diupload.";
	  echo "<br><a href='dashboard'>Kembali Ke Form</a>";
	}
?>
