<?php
    error_reporting(0);
	include 'config.php';
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	$posted=$_POST['posted'];
	$name=$_FILES['file_video']['name'];
    $type=$_FILES['file_video']['type'];
    $size=$_FILES['file_video']['size'];
    $nama_file=str_replace(" ","_",$name);
    $tmp_name=$_FILES['file_video']['tmp_name'];
    /*$nama_folder="video/";
    $nama_file_baru=$nama_folder.basename($nama_file);*/
    $path = "video/".$nama_file;
    if ((($type == "video/mp4") || ($type == "video/3gpp")  || ($type == "video/x-flv")|| ($type == "video/mkv") ) && ($size < 100000000 ))
    {
        
        if(move_uploaded_file($tmp_name,$path)){
            $query = "INSERT INTO video (id_video, judul_video, keterangan, video_file, waktu, posted) VALUES( NULL, '".$judul."', '".$keterangan."','".$nama_file."', NOW(), '".$posted."')";
		$sql = mysqli_query($query);
		if($sql){ 
		    header("location: allvideo");
		}else{
		    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		    echo "<br><a href='dashboard'>Kembali Ke Form</a>";
		}
         	}
    }else{
        ?>
            <script type="text/javascript" language="javascript">
                alert('Jenis file tidak sesuai atau ukuran file terlalu besar!');
                window.location.href='addvideo';
            </script>
        <?php
    	/*$msg="Jenis file tidak sesuai atau ukuran file terlalu besar!";
        echo $msg;*/
    }

?>