<?php
	include "config.php";
	$id_pos=$_GET['id_posting'];
	$query="SELECT * FROM postingan WHERE id_posting='".$id_pos."'";
	$sql=mysqli_query($con, $query);
	$data=mysqli_fetch_row($sql);
	if(is_file("dist/img/".$data[3])) 
  		unlink("dist/img/".$data[3]);
  	$query2="DELETE FROM postingan WHERE id_posting='".$id_pos."'";
  	$sql2=mysqli_query($con, $query2);
  	if($sql2){
  		header("location: postingan");
  	}else{
  		echo "Data gagal dihapus. <a href='postingan'>Kembali</a>";
}
?>