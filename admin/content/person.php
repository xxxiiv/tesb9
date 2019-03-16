<?php 
include '../koneksi/koneksi.php';
	#tampilan/pilih semua data dari table user urutkan berdasarkan dari terbesar ke terkecil
$query 	= mysqli_query($koneksi, "SELECT m_person.id,m_person.*,m_regions.name FROM m_person LEFT JOIN m_regions ON m_regions.id = m_person.region_id ORDER BY id DESC");


	#print_r($row);die;

?>


<div class="card">
	<div class="card-header">
		<h2>Person</h2>
	</div>
	<div class="card-body">
		<div align="right">
			<a href="?pg=tambah-person" class="btn btn-warning mb-4 ">Tambah Person</a>
		</div>
		<table class="table table-bordered">
			<caption>table title and/or explanatory text</caption>
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama </th>
					<th>Region</th>
					<th>Alamat</th>
					<th>Gaji</th>
					<th>Dibuat</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<?php $no=1;   while($row = mysqli_fetch_assoc($query)){ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name_person'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['income'] ?></td>
						
						<td><?php echo date('d/m/Y',strtotime($row['created_at'])) ?>
						</td>		
						
						<td>
							<a class="btn btn-primary btn-xs" href="?pg=ubah-person&edit= <?php echo  $row['id']?>" target="balank">Edit</a> ||

							<a class="btn btn-danger btn-xs" href="?pg=hapus-person&delete= <?php echo  $row['id']?>" onclick="return confirm('apakah anda yakin menghapus data ini')" >Delate</a>


						</td>
					</tr>
				<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
	
</div>