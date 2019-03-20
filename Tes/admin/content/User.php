<?php 
include '../koneksi/koneksi.php';
	#tampilan/pilih semua data dari table user urutkan berdasarkan dari terbesar ke terkecil
$query 	= mysqli_query($koneksi,"SELECT * FROM m_users ORDER BY id DESC");

?>

<div class="card">
	<div class="card-header">
		<h2>User</h2>
	</div>
	<div class="card-body">

		<div align="right">
			
			<a href="?pg=tambah-user" class="btn btn-warning mb-4 left">Tambah User</a>
		</div>
		<table class="table table-bordered">
			<caption>table title and/or explanatory text</caption>
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Email</th>
					<th>Password</th>
					<th>Created At</th>
					<th>Edit</th>
					
				</tr>
			</thead>
			<tbody>
					<?php $no=1;   while($row = mysqli_fetch_assoc($query)){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['password'] ?></td>
						<td><?php echo date('d/m/Y',strtotime($row['created_at'])) ?></td>
						
						
						<td>
							<a class="btn btn-primary btn-xs" href="?pg=ubah-user&edit= <?php echo  $row['id']?>" target="balank">Edit</a> ||

							<a class="btn btn-danger btn-xs" href="?pg=hapus-user&delete= <?php echo  $row['id']?>" onclick="return confirm('apakah anda yakin menghapus data ini')" >Delate</a>


						</td>
					</tr>
				<?php }?>		
			</tbody>
		</table>
	</div>

</div>