<?php 
include '../koneksi/koneksi.php';

if (isset($_POST['kembali'])) {
	header("location:?pg=provinsi");
		# code...
}

if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit = mysqli_query($koneksi, "SELECT * FROM m_regions WHERE region_id ='$id'");
		$rowEdit= mysqli_fetch_assoc($edit);
	}

if (isset($_POST['ubah'])) {
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$update = mysqli_query($koneksi, "UPDATE m_regions SET name='$nama' WHERE region_id = '$id'");		
	
	if($update){
		header("location:?pg=provinsi&ubah=berhasil");
	}
	else{
		header("Location:?pg=ubah-provinsi&edit=".$id."&ubah=gagal");
		
	}
}


?>





<div class="card">
	<div class="card-header">
		<h2>Ubah User</h2>
	</div>
	<div class="card-body">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>Ubah User</h1>
		</div>
		<form action="" method="post" class="mt-3 pl-2">

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nama Provinsi</label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" name="nama"  value="<?php echo $rowEdit['name'] ?>">
					</div>
				</div>
			</div>					

		

			<div class="form-group row">	
				<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
					<input class="btn btn-primary" type="submit" name="ubah" value="Ubah">								
					<input class="btn btn-primary" type="submit" name="kembali" value="kembali">								
				</div>	
			</div>


		</form>
		
	</div>

</div>