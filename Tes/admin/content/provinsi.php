<?php 
include '../koneksi/koneksi.php';
	#tampilan/pilih semua data dari table user urutkan berdasarkan dari terbesar ke terkecil
$query 	= mysqli_query($koneksi,"SELECT * FROM m_regions ORDER BY id DESC");

?>
<div class="card">
	<div class="card-header">
		<h2>Provinsi</h2>
	</div>
	<div class="card-body">

		<div align="right">
			
			<a href="?pg=tambah-provinsi" class="btn btn-warning mb-4 left">Tambah Provinsi</a>
		</div>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama </th>				
					<th>Dibuat</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;   while($row = mysqli_fetch_assoc($query)){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo date('d/m/Y',strtotime($row['created_at'])) ?>
						</td>		
						
						<td>
							<a class="btn btn-primary btn-xs" href="?pg=ubah-provinsi&edit= <?php echo  $row['id']?>" target="balank">Edit</a> ||

							<a class="btn btn-danger btn-xs" href="?pg=hapus-provinsi&delete= <?php echo  $row['id']?>" onclick="return confirm('apakah anda yakin menghapus data ini')" >Delate</a>


						</td>
					</tr>
				<?php }?>	
			</tbody>
		</table>	
	</div>
	
</div>