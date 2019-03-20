<?php 
include '../koneksi/koneksi.php';
if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		//hapus data dari table user where id di ambil dari nilai parameter(delete)
		$delete = mysqli_query($koneksi, "DELETE FROM m_users WHERE id='$id'");
		if ($delete) {
			header("location:?pg=user&hapus=berhasil");
		}else{
			header("location:?pg=hapus-user&hapus=".$id."hapus=gagal");
		}
	} 
?>