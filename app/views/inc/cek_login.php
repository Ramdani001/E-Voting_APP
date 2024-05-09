<?php
@session_start();
include('config.php');

if(isset($_POST['masuk']))
	{
	$user = mysqli_real_escape_string($koneksi,$_POST['email']);
	$pass = mysqli_real_escape_string($koneksi,$_POST['password']);
	$queryuser = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$user' AND password= md5('$pass')");
	$hasil 	= mysqli_num_rows($queryuser);
	$cariuser = mysqli_fetch_array($queryuser);
		
		if ($hasil == 1) {
			$_SESSION['email'] = $cariuser['email'];
			
			if ($cariuser['tipe'] == "ANGGOTA" ) { $_SESSION['log'] = "Logged"; header("location:index.php");}
			else { }
		} else {
			echo("	<div class='alert alert-danger'>
				<center>
					<strong>LOGIN GAGAL</strong>
					<br>
					Periksa Nama Pengguna dan Kata Sandi!
				</center>
			</div> ");
		}		
	}

?>