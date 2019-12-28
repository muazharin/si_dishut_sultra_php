<?php
//fungsi check.php ini adalah untuk mengecek data user yang ada dalam database agar bisa login ke halaman website.
	session_start();
	require_once "config.php";
	if(ISSET($_POST['user']) && ISSET($_POST['pass']))
  	{
      	$user=$_POST['user'];
      	$password=md5($_POST['pass']);
      	$perintah="SELECT * FROM user_admin WHERE username='$user' AND password='$password'";
     	$hasil=mysqli_query($con, $perintah);
      	$jml_data=mysqli_num_rows($hasil);
	  	if ($jml_data>0)
	  	{
	    	$_SESSION['user']=$user;
	    	function sesi($user){
	    		$usr=$user;
	    		
	    	}
			?>
			<script type='text/javascript' language='JavaScript'>
				alert('Anda Berhasil Masuk');
					window.location.href="dashboard";
			</script>
			<?php
	  	}else{
	    ?>
			<script type="text/javascript" language="JavaScript">
				alert('Username atau Password yang Anda Masukkan Salah');
				document.location='login';
			</script>
		<?php
		}
	}
?>