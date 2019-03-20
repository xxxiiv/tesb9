<?php 
include '../koneksi/koneksi.php';
$provinsi = mysqli_query($koneksi,"SELECT * FROM m_regions");

if (isset($_POST['kembali'])) {
	header("location:?pg=provinsi");
		# code...
}

if (isset($_POST['tambah'])) {
	$nama = $_POST['nama'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];
	$gaji = $_POST['gaji'];
	$insert = mysqli_query($koneksi, "INSERT INTO m_person (name_person,region_id,address,income) VALUES ('$nama','$provinsi','$alamat','$gaji')");		
	
	if($insert){
		header("location:?pg=person&tambah=berhasil");
	}
	else{
		header("location:?pg=tambah-person&tambah=gagal");
		
	}
}


?>





<div class="card">
	<div class="card-header">
		<h2>Tambah Person</h2>
	</div>
	<div class="card-body">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>Tambah Person</h1>
		</div>
		<form action="" method="post" class="mt-3 pl-2">

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nama Person </label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" name="nama" placeholder="Nama ">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Provinsi</label>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<select name="provinsi" id="" class="form-control">
							<option value="">Pilih Provinsi</option>
							<?php while($row = mysqli_fetch_assoc($provinsi)){ ?>
								<option value="<?php echo $row['id'] ?>">
									<?php echo $row['name']?>
								</option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Gaji Person </label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="number" class="form-control" name="gaji" placeholder="Gaji ">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alamat</label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<textarea name="alamat" id="" cols="30" rows="10" placeholder="Alamat Person"></textarea>
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