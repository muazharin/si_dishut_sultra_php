<?php
	error_reporting(0);
	include 'config.php';
	$link=$_POST['link'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	$posted=$_POST['posted'];
	$query = "INSERT INTO video (id_video, judul_video, keterangan, video_link, waktu, posted) VALUES( NULL, '".$judul."', '".$keterangan."','".$link."', NOW(), '".$posted."')";
	$sql = mysqli_query($con, $query);
	if($sql){ 
		header("location: allvideo");
	}else{
		?>
            <script type="text/javascript" language="javascript">
                alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');
                window.location.href='addvideo';
            </script>
        <?php
	}
?>