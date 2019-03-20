<?php 
include '../koneksi/koneksi.php';

if (isset($_POST['kembali'])) {
	header("location:?pg=provinsi");
		# code...
}

if (isset($_POST['tambah'])) {
	$nama = $_POST['nama'];
	$insert = mysqli_query($koneksi, "INSERT INTO m_regions (name) VALUES ('$nama')");		
	
	if($insert){
		header("location:?pg=provinsi&tambah=berhasil");
	}
	else{
		header("location:?pg=tambah-provinsi&tambah=gagal");
		
	}
}


?>





<div class="card">
	<div class="card-header">
		<h2>Tambah User</h2>
	</div>
	<div class="card-body">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>Tambah User</h1>
		</div>
		<form action="" method="post" class="mt-3 pl-2">

			<div class="form-group">
				

				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nama Provinsi</label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" name="nama" placeholder="Nama Provinsi">
					</div>
				</div>
			</div>					

			

			<div class="form-group row">	
				<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
					<input class="btn btn-primary" type="submit" name="tambah" value="Tambah">								
					<input class="btn btn-primary" type="submit" name="kembali" value="kembali">								
				</div>	
			</div>


		</form>
		
	</div>

</div>