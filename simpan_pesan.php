<?php
	include "config.php";
	$nama=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$pesan=$_POST['message'];
	$query="INSERT INTO pesan (id_pesan, nama_lengkap, no_hp, email, content_pesan, status) VALUES (NULL, '".$nama."','".$phone."','".$email."','".$pesan."','unread')";
	$sql=mysqli_query($con, $query);
	if($sql){
		?>
			<script type='text/javascript' language='JavaScript'>
				alert('Terima Kasih Atas Saran Anda');
					window.location.href="home";
			</script>
		<?php
	}else{
		?>
			<script type='text/javascript' language='JavaScript'>
				alert('Kesalahan Dalam Mengirim Pesan. Silahkan Ulangi Lagi!.');
					window.location.href="contact";
			</script>
		<?php
	}
?>