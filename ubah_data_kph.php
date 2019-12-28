<?php
	include 'config.php';
	$id=$_POST['id'];
	$no = $_POST['no'];
	$nama = $_POST['nama_kph'];
	$nip = $_POST['nip'];
	$pangkat =  $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$lokasi = $_POST['lokasi'];
	$luaswilayah = $_POST['luas'];
	$potensi = $_POST['potensi'];
	if (isset($_POST['ubah_foto'])) {
		$foto = $_FILES['foto']['name'];
		$foto_file=str_replace(" ","_",$foto);
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto_file;
		$path = "dist/img/kph/".$fotobaru;
		if(move_uploaded_file($tmp, $path)){ 
		  $query = "SELECT * FROM kph WHERE id='".$id."'";
		  $sql = mysqli_query($con, $query);
		  $data = mysqli_fetch_array($sql);
		  if(is_file("dist/img/".$data[foto])) {
		  		unlink("dist/img/".$data[foto]);
		  }
		  $query2="UPDATE kph SET foto = '".$fotobaru."', no='".$no."', nama='".$nama."', nip='".$nip."', pangkat_gol='".$pangkat."', jabatan='".$jabatan."', lokasi='".$lokasi."', luas_wilayah='".$luaswilayah."', potensi='".$potensi."' WHERE id='".$id."'";
		  $sql2=mysqli_query($con, $query2);
		  if($sql2){ 
		    header("location: listkph");
		  }else{
		    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		    echo "<br><a href='listkph'>Kembali Ke Form</a>";
		  }
		}else{
		  echo "Maaf, Gambar gagal untuk diupload.";
		  echo "<br><a href='listkph'>Kembali Ke Form</a>";
		}
	}else{
		$query3 = "UPDATE kph SET no='".$no."', nama='".$nama."', nip='".$nip."', pangkat_gol='".$pangkat."', jabatan='".$jabatan."', lokasi='".$lokasi."', luas_wilayah='".$luaswilayah."', potensi='".$potensi."' WHERE id='".$id."'";
      	$sql3 = mysqli_query($con, $query3);
     	if($sql3){ 
			header("location: listkph");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='listkph'>Kembali Ke Form</a>";
		}
	}
?>