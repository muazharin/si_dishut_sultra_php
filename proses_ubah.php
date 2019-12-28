<?php
	include 'config.php';
	$id_pos=$_POST['id'];
	$judul2 = $_POST['judul2'];
	$berita2 = $_POST['berita2'];

	if (isset($_POST['ubah_foto'])) {
		$foto = $_FILES['foto']['name'];
		$foto_file=str_replace(" ","_",$foto);
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto_file;
		$path = "img/".$fotobaru;
		if(move_uploaded_file($tmp, $path)){ 
			$query="SELECT * FROM postingan WHERE id_posting='".$id_pos."'";
			$sql = mysqli_query($con, $query);
			$data=mysqli_fetch_row($sql);
			if(is_file("dist/img/".$data[3])) 
		  		unlink("dist/img/".$data[3]);
      		$query2 = "UPDATE postingan SET judul='".$judul2."', content = '".$berita2."', foto = '".$fotobaru."' WHERE id_posting='".$id_pos."'";
      		$sql2 = mysqli_query($con, $query2);
      		if($sql2){ 
			    header("location: postingan");
			  }else{
			    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			    echo "<br><a href='postingan'>Kembali Ke Form</a>";
			  }

		}else{
		  echo "Maaf, Gambar gagal untuk diupload.";
		  echo "<br><a href='postingan'>Kembali Ke Form</a>";
		}
	}else{
		$query3 = "UPDATE postingan SET judul='".$judul2."', content='".$berita2."' WHERE id_posting='".$id_pos."'";
      	$sql3 = mysqli_query($con, $query3);
     	if($sql3){ 
			header("location: postingan");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='postingan'>Kembali Ke Form</a>";
		}
	}
?>
