<?php 
include '../koneksi/koneksi.php';
$provinsi = mysqli_query($koneksi,"SELECT * FROM m_regions");


if (isset($_POST['kembali'])) {
	header("location:?pg=provinsi");
		# code...
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit = mysqli_query($koneksi, "SELECT * FROM m_person WHERE id ='$id'");
	$rowEdit= mysqli_fetch_assoc($edit);
}

if (isset($_POST['ubah'])) {
	$nama = $_POST['nama'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];
	$gaji = $_POST['gaji'];
	$update = mysqli_query($koneksi, "UPDATE m_person SET name_person='$nama',region_id='$provinsi',address='$alamat',income='$gaji' WHERE id = '$id'");		
	
	if($update){
		header("location:?pg=person&ubah=berhasil");
	}
	else{
		header("Location:?pg=ubah-person&edit=".$id."&ubah=gagal");
		
	}
}


?>





<div class="card">
	<div class="card-header">
		<h2>Ubah Person</h2>
	</div>
	<div class="card-body">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>Ubah Peson</h1>
		</div>
		<form action="" method="post" class="mt-3 pl-2">

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nama Provinsi</label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" name="nama"  value="<?php echo $rowEdit['name_person'] ?>">
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
								<option <?php echo ($rowEdit['region_id'] == $row['id'])?'selected':''?> value="<?php echo $row['id'] ?>">
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
						<input type="n	umber" class="form-control" name="gaji"value="<?php echo $rowEdit['income'] ?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alamat</label>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<textarea name="alamat" id="" cols="30" rows="10"><?php echo $rowEdit['address']; ?></textarea>
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