<?php
	include 'config.php';
	$id_pos=$_POST['id'];
	$admin = $_POST['nama'];
	$password=md5($_POST['password']);
	$query3 = "UPDATE user_admin SET username='".$admin."', password='".$password."' WHERE id='".$id_pos."'";
    $sql3 = mysql_query($query3);
     if($sql3){ 
		header("location: administrator");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='administrator'>Kembali Ke Form</a>";
	}
?>
