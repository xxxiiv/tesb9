<?php 
	$database_koneksi ="db_provinsi";
	$username_koneksi="root";
	$password_koneksi="";
	$host_koneksi="localhost";

	$koneksi 	=mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi) 
	or die(mysql_error());
	if ($koneksi) {
		#buka database
		mysqli_select_db($koneksi,$database_koneksi);
	}else{
		mysqli_close($koneksi);
	}

	
 ?>