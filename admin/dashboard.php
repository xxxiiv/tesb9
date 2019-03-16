<?php 
session_start();

if (!isset($_SESSION['email'])) {
	header("location:index.php?akses=gagal");
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
	<div class="wrapper">
		<!--Nav-->
		<div class="menu-admin">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Admin Profinsi</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="?pg=home">Home <span class="sr-only">(current)</span></a>
						</li>						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Data Person
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="?pg=person">Data Person</a>
								<a class="dropdown-item" href="?pg=tambah-person">Tambah Person</a>								
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Data Provinsi
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="?pg=provinsi">Data Provinsi</a>
								<a class="dropdown-item" href="?pg=tambah-provinsi">Tambah Provinsi</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="?pg=user" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Data User
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="?pg=user">Data User</a>
								<a class="dropdown-item" href="?pg=tambah-user">Tambah User</a>
							</div>
						</li>

						

					</ul>

					<ul class="navbar-nav ml">
						<li class="nav-item dropdown">
							
								
								<a class="dropdown-item" href="keluar.php">Keluar</a>
							
						</li>
					</ul>     

				</div>
			</nav>
		</div>
		<!--/NAV-->
		<!--Content-->
		<div class="container mt-5">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php 
							if (isset($_GET['pg'])) {
								if (file_exists('content/'.$_GET['pg'].'.php')) {
									require_once('content/'.$_GET['pg'].'.php');
								}else{
									require_once('content/no_found.php');
								}
							}else{
								require_once('content/home.php');
							}
						 ?>
				</div>				
			</div>
		</div>
		<!--/Content-->
	</div>



	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	
</body>
</html>