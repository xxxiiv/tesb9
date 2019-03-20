<?php 
session_start();
include '../koneksi/koneksi.php';

if (isset($_POST['login'])) {

	$email =$_POST['email'];
	$password =($_POST['password']);
	$login = mysqli_query($koneksi, "SELECT * FROM m_users WHERE email ='$email' AND password = '$password'");
	if (mysqli_num_rows($login) > 0 ) {
		$_SESSION['email'] = $_POST['email'];
		header("location:dashboard.php");
	}else{
		echo "Maaf password dan email yang anda masukan salah"; die;
	}  




}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="box-login">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 center">
						<div class="form-login">

							<?php if (isset($_GET['akses'])): ?>								
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Gagal!</strong> Ups. Silahkan Login Terlebih Dahulu ...
							</div>
							<?php endif ?>

							<h3>Form Login</h3>
							<form action="" class="form-horizontal" method="post">

								<div class="form-group">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<label for="" class="control-label">Email</label>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<input type="text" class="form-control" placeholder="Email" name="email">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<label for="" class="control-label">Password</label>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<input type="password" class="form-control" placeholder="Password" name="password">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<input type="submit" class="btn btn-primary" value="Login" name="login">
										<input type="reset" class="btn btn-danger" value="Cancel">
									</div>									
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>