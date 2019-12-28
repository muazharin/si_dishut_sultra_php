<?php
	include 'config.php';
	$no = $_POST['no'];
	$nama = $_POST['nama_kph'];
	$nip = $_POST['nip'];
	$pangkat =  $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$lokasi = $_POST['lokasi'];
	$luaswilayah = $_POST['luas'];
	$potensi = $_POST['potensi'];
	$foto = $_FILES['foto']['name'];
	$foto_file=str_replace(" ","_",$foto);
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto_file;
	$path = "dist/img/kph/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){ 
	  $query = "INSERT INTO kph (id, foto, no, nama, nip, pangkat_gol, jabatan, lokasi, luas_wilayah, potensi) VALUES( NULL,'".$fotobaru."','".$no."','".$nama."','".$nip."', '".$pangkat."', '".$jabatan."', '".$lokasi."', '".$luaswilayah."', '".$potensi."')";
	  $sql = mysqli_query($con, $query);
	  if($sql){ 
	    header("location: listkph");
	  }else{
	    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	    echo "<br><a href='addkph'>Kembali Ke Form</a>";
	  }
	}else{
	  echo "Maaf, Gambar gagal untuk diupload.";
	  echo "<br><a href='addkph'>Kembali Ke Form</a>";
	}
?>
