<?php
	include "config.php";
	$id=$_GET['id_pesan'];
	$query2="DELETE FROM pesan WHERE id_pesan='".$id."'";
  	$sql2=mysqli_query($con, $query2);
  	if($sql2){
  		header("location: pesan");
  	}else{
  		echo "Data gagal dihapus. <a href='pesan'>Kembali</a>";
    }
?>