<?php
	include "config.php";
	$id_pos=$_GET['id'];
	$query2="DELETE FROM user_admin WHERE id='".$id_pos."'";
  $sql2=mysqli_query($con, $query2);
  	if($sql2){
  		header("location: administrator");
  	}else{
  		echo "Data gagal dihapus. <a href='administrator'>Kembali</a>";
    }
?>