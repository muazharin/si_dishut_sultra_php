<?php
	include 'config.php';
	$admin = $_POST['nama'];
	$password=md5($_POST['password']);
	$query3 = "INSERT INTO user_admin (id, username, password) VALUES (NULL, '".$admin."', '".$password."')";
    $sql3 = mysqli_query($con, $query3);
     if($sql3){ 
		header("location: administrator");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='adminbaru'>Kembali Ke Form</a>";
	}
?>
