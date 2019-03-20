<?php 
include '../koneksi/koneksi.php';
if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$delete = mysqli_query($koneksi, "DELETE FROM m_person WHERE id='$id'");
		if ($delete) {
			header("location:?pg=person&hapus=berhasil");
		}else{
			header("location:?pg=hapus-person&hapus=".$id."hapus=gagal");
		}
	} 
?>